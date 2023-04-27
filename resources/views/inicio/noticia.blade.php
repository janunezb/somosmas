@extends('layouts.plantilla')

@section('title', 'Noticias')

@section('content1')
<li class="nav-item dropdown">
    <a class="nav-link  text-white" href="{{route('inicio.index')}}" id="navbarDropdown"
    role="button" aria-expanded="false">
    Tu SGSST</a>
</li>
@endsection
@section('content')
    <div id="app">
        <example-component></example-component>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    
@endsection
