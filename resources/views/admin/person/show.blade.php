@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}

            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.person.fields.id') }}
                        </th>
                        <td>
                            {{ $person->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.person.fields.first_name') }}
                        </th>
                        <td>
                            {{ $person->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.person.fields.last_name') }}
                        </th>
                        <td>
                            {{ $person->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.person.fields.qualita') }}
                        </th>
                        <td>
                            {{ $person->qualita_label }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.person.fields.ref') }}
                        </th>
                        <td>
                            {{ $person->ref }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.person.fields.address') }}
                        </th>
                        <td>
                            {{ $person->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.person.fields.cap') }}
                        </th>
                        <td>
                            {{ $person->cap }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.person.fields.city') }}
                        </th>
                        <td>
                            {{ $person->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.person.fields.cf') }}
                        </th>
                        <td>
                            {{ $person->cf }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.person.fields.piva') }}
                        </th>
                        <td>
                            {{ $person->piva }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.person.fields.contract') }}
                        </th>
                        <td>
                            @foreach($person->contract as $key => $entry)
                                <span class="badge badge-relationship">{{ $entry->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.people.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection