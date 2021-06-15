<?php

namespace App\Http\Livewire\Contract;

use App\Models\Contract;
use App\Models\Template;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Contract $contract;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Contract $contract)
    {
        $this->contract = $contract;
        $this->initListsForFields();
        $this->mediaCollections = [
            'contract_attachment' => $contract->attachment,
        ];
    }

    public function render()
    {
        return view('livewire.contract.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->contract->save();
        $this->syncMedia();

        return redirect()->route('admin.contracts.index');
    }

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    protected function rules(): array
    {
        return [
            'contract.title' => [
                'string',
                'nullable',
            ],
            'mediaCollections.contract_attachment' => [
                'array',
                'nullable',
            ],
            'mediaCollections.contract_attachment.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'contract.location' => [
                'string',
                'nullable',
            ],
            'contract.cup' => [
                'string',
                'nullable',
            ],
            'contract.cig' => [
                'string',
                'nullable',
            ],
            'contract.date' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'contract.name' => [
                'string',
                'nullable',
            ],
            'contract.price' => [
                'numeric',
                'nullable',
            ],
            'contract.template_id' => [
                'integer',
                'exists:templates,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['template'] = Template::pluck('name', 'id')->toArray();
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->contract->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
