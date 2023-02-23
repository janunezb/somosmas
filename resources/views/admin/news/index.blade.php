@extends('adminlte::page')

@section('title', 'Noticias')

@section('content_header')
    <h1>Noticias</h1>
    @livewireStyles
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif



    <p>@livewire('admin.news-index')</p>
@stop



@section('js')
    @livewireScripts
    <script></script>
@stop
