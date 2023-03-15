@extends('adminlte::page')
@section('css')
<style>
    .btn-enviar{
        background: #F23DB3;
        color: azure;
    }
    .btn-enviar:hover {
        background: #9f2976;
        color: azure;
    }

</style>
@endsection

@section('title', 'Crear Colaborador')

@section('content_header')
    <h1>Nuevo Colaboador</h1>
    @livewireStyles
@stop

@section('content')
{!!Form::open(['route'=>'admin.users.store','enctype'=>'multipart/form-data'])!!}
  <div class="card">
    <div class="card-body" >
        <h5 class="card-title">DATOS PERSONALES</h5>
        <hr>
        <div class="row">
            <div class="form-group col-4">
                {!! Form::label('documento', 'Documento') !!}
                {!! Form::number('documento',null, ['class'=>'form-control','placeholder'=>'Ingrese documento']) !!}
                @error('documento')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
            <div class="form-group col-8">
                {!! Form::label('nombre', 'Nombre y Apellidos') !!}
                {!! Form::text('nombre',null, ['class'=>'form-control','placeholder'=>'Ingrese Nombres y Apellidos']) !!}
                @error('nombre')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4">
                {!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento') !!}
                {!! Form::date('fecha_nacimiento',null, ['class'=>'form-control','placeholder'=>'Ingrese Nombres y Apellidos']) !!}
                @error('fecha_nacimiento')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
            <div class="form-group col-4">
                {!! Form::label('imagen', 'Foto') !!}
                {!! Form::file('imagen',['accept'=>'image/*'])!!}
                @error('imagen')
                <span class="text-danger">{{$message }}</span>
            @enderror

            </div>
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
        <h5 class="card-title">DATOS LABORALES</h5>
        <hr>
        <div class="row">
            <div class="form-group col-8">
                {!! Form::label('cargo', 'Cargo') !!}
                {!! Form::text('cargo',null, ['class'=>'form-control','placeholder'=>'Ingrese cargo']) !!}
                @error('cargo')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
            <div class="form-group col-4">
                    {!! Form::label('empresa_id', 'Empresa') !!}
                    {!! Form::select('empresa_id', $empresas
                        ,null, ['class'=>'form-control','placeholder'=>'Ingrese empresa']) !!}
                    @error('empresa_id')
                        <span class="text-danger">{{$message }}</span>
                    @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4">
                {!! Form::label('fecha_ingreso', 'Fecha de Ingreso') !!}
                {!! Form::date('fecha_ingreso',\Carbon\Carbon::now(), ['class'=>'form-control']) !!}
                @error('fecha_ingreso')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
            <div class="form-group col-6">
                {!! Form::label('email', 'Correo Corporativo') !!}
                {!! Form::email('email',null, ['class'=>'form-control']) !!}
                @error('email')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4" >
                {{-- @foreach ($roles as $role)
                    {!! Form::checkbox('roles[]',$role->id,null ,['class'=>'mr-1']);!!}
                    {{$role->name}}
                 @endforeach --}}
                 {!! Form::checkbox('roles','1',null ,['class'=>'mr-1'])!!}
                 {!! Form::label('roles', 'Administrador') !!}
            </div>
        </div>
    </div>
  </div>
  {!! Form::submit('Crear Colaborador', ['class'=>'btn btn-enviar']) !!}
{!!Form::close()!!}
<hr
@stop


