@extends('adminlte::page')

@section('title', 'Editar Colaborador')

@section('content_header')
    <h1>Editar Colaboador</h1>
    @livewireStyles
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {{-- <p class="h5">Nombre</p>
            <p class="fomr-control">{{$user->nombre}}</p> --}}
            <p>
                <label>Nombre</label>
                <input type="text" class="input_tabla" value="{{$user->nombre}}" >
            </p>
            <p>
                <label>Documento</label>
                <input type="number" class="input_tabla" value="{{$user->documento}}" >
            </p>
            <p>
                <label>Cargo</label>
                <input type="text" class="input_tabla" value="{{$user->cargo}}" >
            </p>
            <p>
                <label>Fecha Nacimiento</label>
                <input type="date" class="input_tabla" value="{{$user->fecha_nacimiento}}" >
            </p>
        </div>
    </div>
    
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @livewireScripts
    <script></script>
@stop