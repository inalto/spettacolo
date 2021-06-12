<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('contract_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan



        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.contract.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.contract.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.contract.fields.attachment') }}
                        </th>
                        <th>
                            {{ trans('cruds.contract.fields.location') }}
                            @include('components.table.sort', ['field' => 'location'])
                        </th>
                        <th>
                            {{ trans('cruds.contract.fields.cup') }}
                            @include('components.table.sort', ['field' => 'cup'])
                        </th>
                        <th>
                            {{ trans('cruds.contract.fields.cig') }}
                            @include('components.table.sort', ['field' => 'cig'])
                        </th>
                        <th>
                            {{ trans('cruds.contract.fields.title') }}
                            @include('components.table.sort', ['field' => 'title'])
                        </th>
                        <th>
                            {{ trans('cruds.contract.fields.date') }}
                            @include('components.table.sort', ['field' => 'date'])
                        </th>
                        <th>
                            {{ trans('cruds.contract.fields.price') }}
                            @include('components.table.sort', ['field' => 'price'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contracts as $contract)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $contract->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $contract->id }}
                            </td>
                            <td>
                                {{ $contract->name }}
                            </td>
                            <td>
                                @foreach($contract->attachment as $key => $entry)
                                    <a class="link-light-blue" href="{{ $entry['url'] }}">
                                        <i class="far fa-file">
                                        </i>
                                        {{ $entry['file_name'] }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $contract->location }}
                            </td>
                            <td>
                                {{ $contract->cup }}
                            </td>
                            <td>
                                {{ $contract->cig }}
                            </td>
                            <td>
                                {{ $contract->title }}
                            </td>
                            <td>
                                {{ $contract->date }}
                            </td>
                            <td>
                                {{ $contract->price }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('contract_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.contracts.show', $contract) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('contract_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.contracts.edit', $contract) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('contract_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $contract->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $contracts->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush