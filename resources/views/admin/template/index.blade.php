@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.template.title') }}
                
            </h6>

            @can('template_create')
                <a class="btn btn-indigo" href="{{ route('admin.templates.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.template.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('template.index')

</div>
@endsection