@extends('adminlte::page')

@section('title', 'Colaboradores')

@section('content_header')
    <h1>Colaboradores</h1>
    @livewireStyles
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <p>@livewire('admin.users-index')</p>
@stop



@section('js')
    @livewireScripts
    <script></script>
@stop