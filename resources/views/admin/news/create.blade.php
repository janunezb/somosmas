@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="{{ asset('css/dropzone.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.css">
<style>
    .btn-personal{
        background: fuchsia;
        color: azure;
    }
    .btn-personal:hover {
        background: rgb(201, 1, 201);
        color: azure;
    }

</style>
@endsection

@section('title', 'Crear Noticia')

@section('content_header')
    <h1>Nueva Noticia</h1>
    @livewireStyles
@stop

@section('content')

{!!Form::open(['route'=>'admin.news.store','enctype'=>'multipart/form-data'])!!}
  <div class="card">
    <div class="card-body" >
        <div class="row">
            <div class="form-group col-8">
                {!! Form::label('titulo', 'Titulo') !!}
                {!! Form::text('titulo',null, ['class'=>'form-control','placeholder'=>'Ingrese título']) !!}
                @error('titulo')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('contenido', 'Contenido') !!}
            {!! Form::textarea('contenido',null, ['class'=>
                'form-control',
                'placeholder'=>'Ingrese la noticia']) !!}
                @error('contenido')
                    <span class="text-danger">{{$message }}</span>
                @enderror
        </div>
        <div class="row">
            <div class="form-group col-4">
                {!! Form::label('adjunto', 'Adjuntos') !!}
                {!! Form::text('adjunto',null, ['class'=>'form-control','placeholder'=>'Ingrese links de adjuntos']) !!}
                @error('adjunto')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4">
                <div class="form-group col-4">
                {!! Form::label('imagenes', 'Foto') !!}
                {!! Form::file('imagenes',['accept'=>'image/*'])!!}
                @error('imagenes')
                <span class="text-danger">{{$message }}</span>
            @enderror
            </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4" >
                 {!! Form::radio('estado',1 ,['class'=>'mr-1'])!!}
                 {!! Form::label('estado', 'Publicado') !!}
                 {!! Form::radio('estado',0,['class'=>'mr-1'])!!}
                 {!! Form::label('estado', 'Borrador') !!}
            </div>
        </div>
    </div>
  </div>
  <hr>
  
  {!! Form::submit('Crear Noticia', ['class'=>'btn btn-personal']) !!}
  {!!Form::close()!!}
  <hr>
  {!!Form::open(['route'=>
                    'admin.news.store',
                    'enctype'=>'multipart/form-data',
                    'class'=>'dropzone','id'=>'my-great-dropzone'])!!}
  {!!Form::close()!!}
  <hr>
  

      
@stop

@section('js')
    @livewireScripts

    <script src="{{ asset('ckeditor/build/ckeditor.js') }}"></script>
    <script src="{{ asset('js/dropzone-min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <script>
         ClassicEditor
        .create( document.querySelector( '#contenido' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
    <script>
   
        Dropzone.options.myDropzone = {
            headers:{
                'X-CSRF-TOKEN':"{{ csrf_token() }}"
            },
            paramName:"imagenes",
            acceptedFiles:"image/*",
        
        };
      </script>


@stop
