@extends('adminlte::page')

@section('title', 'Colaboradores')

@section('content_header')
    <h1>Colaboradores</h1>
    @livewireStyles
@stop

@section('content')
    
    <p>@livewire('admin.users-index')</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @livewireScripts
    <script></script>
@stop