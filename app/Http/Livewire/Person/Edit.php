<?php

namespace App\Http\Livewire\Person;

use App\Models\Contract;
use App\Models\Person;
use Livewire\Component;

class Edit extends Component
{
    public Person $person;

    public array $contract = [];

    public array $listsForFields = [];

    public function mount(Person $person)
    {
        $this->person   = $person;
        $this->contract = $this->person->contract()->pluck('id')->toArray();
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.person.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->person->save();
        $this->person->contract()->sync($this->contract);

        return redirect()->route('admin.people.index');
    }

    protected function rules(): array
    {
        return [
            'person.first_name' => [
                'string',
                'required',
            ],
            'person.last_name' => [
                'string',
                'required',
            ],
            'person.qualita' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['qualita'])),
            ],
            'person.ref' => [
                'string',
                'required',
            ],
            'person.address' => [
                'string',
                'required',
            ],
            'person.cap' => [
                'string',
                'required',
            ],
            'person.city' => [
                'string',
                'required',
            ],
            'person.cf' => [
                'string',
                'nullable',
            ],
            'person.piva' => [
                'string',
                'nullable',
            ],
            'contract' => [
                'array',
            ],
            'contract.*.id' => [
                'integer',
                'exists:contracts,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['qualita']  = $this->person::QUALITA_SELECT;
        $this->listsForFields['contract'] = Contract::pluck('name', 'id')->toArray();
    }
}
