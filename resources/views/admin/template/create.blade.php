@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.create') }}
                {{ trans('cruds.template.title_singular') }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('template.create')
    </div>
</div>
@endsection
@section('styles')
<link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
@endsection
@section('scripts')
<script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>
<script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>
<script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
<script>
window.addEventListener('DOMContentLoaded', (event) => {
    Laraberg.init('template') 
});
</script>
@endsection