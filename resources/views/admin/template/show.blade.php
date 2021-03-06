@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.template.title_singular') }}:
                {{ trans('cruds.template.fields.id') }}
                {{ $template->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.template.fields.id') }}
                        </th>
                        <td>
                            {{ $template->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.template.fields.name') }}
                        </th>
                        <td>
                            {{ $template->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.template.fields.template') }}
                        </th>
                        <td>
                            {{ $template->template }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.templates.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection