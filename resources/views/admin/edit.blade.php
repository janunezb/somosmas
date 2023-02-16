@extends('adminlte::page')

@section('title', 'Editar Colaborador')

@section('content_header')
    <h1>Editar Colaboador</h1>
    @livewireStyles
@stop

@section('content')


{!!Form::model($user,['route'=> ['admin.users.update',$user],'method'=>'put'])!!}
<div class="card">
  <div class="card-body">
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
              {!! Form::label('nombre', 'Nombre y Apellios') !!}
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
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
            @error('password')
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
              {!! Form::label('email', 'Correo Coorporativo') !!}
              {!! Form::email('email',null, ['class'=>'form-control']) !!}
              @error('email')
                  <span class="text-danger">{{$message }}</span>
              @enderror
          </div>
      </div>
      <div class="row">
          <div class="form-group col-4" >
              {!! Form::label('role', 'Administrador') !!}
              {!! Form::checkbox('role', 'value');!!}

          </div>
      </div>
  </div>
</div>
{!! Form::submit('Actualizar Colaborador', ['class'=>'btn btn-primary']) !!}
{!!Form::close()!!}
@stop

@section('js')
    @livewireScripts
    <script></script>
@stop
