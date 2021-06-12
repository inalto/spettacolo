<?php

namespace App\Http\Livewire\Contract;

use App\Models\Contract;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Contract $contract;

    public array $mediaToRemove = [];

    public array $mediaCollections = [];

    public function mount(Contract $contract)
    {
        $this->contract = $contract;
    }

    public function render()
    {
        return view('livewire.contract.create');
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

    protected function rules(): array
    {
        return [
            'contract.name' => [
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
            'contract.title' => [
                'string',
                'nullable',
            ],
            'contract.date' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'contract.price' => [
                'numeric',
                'nullable',
            ],
        ];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->contract->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
