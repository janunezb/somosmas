@extends('layouts.nav')

@section('title', 'Somos Más')

@section('content')
<section id="portales" class="d-flex justify-content-center align-items-center p-4">





    <div class="row aling items center">
        <div class="col-4 offset-4">
            <h2 class="titulo">Portales SGSST</h2>

        </div>
        <div class="col-12 texto">
            <p>Ingresa a tu portal!


            </p>
        </div>
        <section  id="portales1" class="d-flex justify-content-center align-items-center p-2">
            <div class="row">
                <div class="col-6 p-3">
                    <article class="card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <a href="{{route('admin.index')}}">
                                    <img src="{{ asset('images/logos/liwa.png') }}"   alt="">
                                </a>
                            </div>

                        </div>
                    </article>
                </div>
                <div class="col-6 p-3">
                    <article class="card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <a href="{{route('admin.sunco')}}">
                                    <img src="{{ asset('images/logos/sunco.png') }}"  alt="">
                                </a>

                            </div>

                        </div>
                    </article>
                    </div>
                </div>
</section>

<section  id="portales2" class="d-flex justify-content-center align-items-center p-2">

        <div class="row">
        <div class="col-6 p-3">
            <article class="card h-100">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <a href="{{route('admin.libre')}}">
                            <img src="{{ asset('images/logos/libre.png') }}"  alt="">
                        </a>

                    </div>

                </div>
            </article>
        </div>
        <div class="col-6 p-3">
            <article class="card h-100">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <a href="{{route('admin.navega')}}">
                            <img  src="{{ asset('images/logos/navega.png') }}"  alt="">
                        </a>

                    </div>

                </div>
            </article>
            </div>
        </div>
</section>


@if(isset($_GET['liwa']))
            {{$_GET['liwa']}}
            <script type="text/javascript" src="{{asset('js/alerta.js')}}"></script>
            @endif







@endsection
