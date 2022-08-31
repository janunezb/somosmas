@extends('layouts.nav')

@section('title', 'Noticias')

@section('content')



    <div class="row">
        <div class="col-2 offset-5 p-4">
            <h2 class="titulo">Noticias</h2>
        </div>
    </div>


    <div class="container-3">
        @php $cant = 0; @endphp

        @foreach ($not as $noticias)
            @php $cant = $cant+1; @endphp

            <div class="row pb-4 card-3">
                <div class="col-6 pb-5" style="padding-right: 1px;">

                    <h1>{{ $noticias->titulo }}</h1>
                    <div>
                        <p class="nuevaa">
                            {{ Str::limit($noticias->cuerpo, 800, '...') }}
                        </p>
                    </div>

                    <div class="row">



                        @if (strlen($noticias->cuerpo) > 800)
                        <div class="col-3">
                            <button type="button" class="ctn" data-toggle="modal"
                                data-target="#myModal<?php echo $cant; ?>">Ver más</button>

                            <div class="modal fade" id="myModal<?php echo $cant; ?>" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <header style="" class="h2">{{ $noticias->titulo }}</header>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="contenido">
                                            <div class="row pt-2">
                                                <div class="" style="float: left">
                                                    <img src="{{ $noticias->imagen }}" class="img-fluid" alt=""
                                                    >
                                                </div>
                                                <div class="pb-5" style="padding-right: 1px;">
                                                    <div>
                                                        <p class="nuevaa" style="background-color: #FAFAFA">
                                                            {{ $noticias->cuerpo }}
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                        @endif

                        @if ($noticias->adjunto)
                        <div class="col-3">


                                    <div class="contenedor-textos2">
                                        <a class="cta" href="{{ $noticias->adjunto }}"
                                            target="_blank">Ver adjunto</a>
                                    </div>


                        </div>
                        @endif

                    </div>

                    <div class="vermaa" style="padding-top: 10%; padding-left:76%">
                        {{$noticias->updated_at}}
                    </div>

                    {{-- <div>
                        <p>
                            {{$noticias->updated_at}}
                        </p>
                    </div> --}}

                </div>





                <div class="col-6 noticiaa">
                    <img src="{{ $noticias->imagen }}" class="pb-4" alt="">
                </div>

                <span><hr></span>

            </div>
        @endforeach



    </div>
    <br>
    <div class="row">
         <div class="col-auto mx-auto nadaa">

            {{ $not->links() }}
        </div>
    </div>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="mensaje"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>


@endsection
