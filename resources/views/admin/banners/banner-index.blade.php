@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-noti.css')}}">
<style>

</style>
@endsection

@section('title', 'Banners')

@section('content_header')
    <h1>Banners</h1>
    @livewireStyles
@stop

@section('content')
    {{-- @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif --}}
    <p>@livewire('admin.banners-index')</p>
@stop



@section('js')
{{-- <script src="{{ asset('js/swiper.bundle.min.js') }}"></script> --}}
@stop
