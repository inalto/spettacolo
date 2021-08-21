@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.person.title') }}
            </h6>

            @can('person_create')
                <a class="btn btn-indigo" href="{{ route('admin.people.create') }}">
                    {{ trans('global.add') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('person.index')

</div>
@endsection