@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.contract.title_singular') }}:
                {{ trans('cruds.contract.fields.id') }}
                {{ $contract->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.contract.fields.id') }}
                        </th>
                        <td>
                            {{ $contract->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contract.fields.name') }}
                        </th>
                        <td>
                            {{ $contract->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contract.fields.attachment') }}
                        </th>
                        <td>
                            @foreach($contract->attachment as $key => $entry)
                                <a class="link-light-blue" href="{{ $entry['url'] }}">
                                    <i class="far fa-file">
                                    </i>
                                    {{ $entry['file_name'] }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contract.fields.location') }}
                        </th>
                        <td>
                            {{ $contract->location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contract.fields.cup') }}
                        </th>
                        <td>
                            {{ $contract->cup }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contract.fields.cig') }}
                        </th>
                        <td>
                            {{ $contract->cig }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contract.fields.title') }}
                        </th>
                        <td>
                            {{ $contract->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contract.fields.date') }}
                        </th>
                        <td>
                            {{ $contract->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contract.fields.price') }}
                        </th>
                        <td>
                            {{ $contract->price }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.contracts.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection