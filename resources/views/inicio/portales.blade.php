@extends('layouts.nav')

@section('title', 'Portales')

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
            <section id="portales1" class="d-flex justify-content-center align-items-center p-2">

                @foreach ($portal as $portales)

                <div class="rowpl-2 aling-items:center">



                    <div class="col-12 p-3">
                        <article class="card h-100">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <a href="{{ route($portales->direccionamiento)}}">
                                        <img src="{{ $portales->imagen }}" alt="">
                                    </a>
                                </div>

                            </div>
                        </article>
                    </div>
                </div>

                @endforeach

            </section>

        </div>
    </section>


            @if (isset($_GET['liwa']))
                {{ $_GET['liwa'] }}
                <script type="text/javascript" src="{{ asset('js/alerta.js') }}"></script>
            @endif







        @endsection
