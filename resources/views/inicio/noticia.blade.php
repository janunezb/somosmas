<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/72557239af.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">






    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>


</head>

<body>




    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio.index') }}"><strong style="color: #ff0080">Somos
                </strong>Más</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('inicio.index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('inicio.cultura') }}">Cultura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('inicio.noticia') }}">Noticias</a>
                    </li>




                </ul>

                <li class="mx-8">
                    <p class="text-white">Bienvenido <b> {{ auth()->user()->name }}</b></p>
                </li>



                <form class="d-flex">
                    <li class="">
                        <a class="btn btn-danger" href="{{ route('login.destroy') }}" role="button">Cerrar Sesión</a>
                    </li>

                </form>
            </div>

            <a href="https://api.whatsapp.com/send?phone=573245522551" class="bt-wsp" target="_blank">
                <i class="bi bi-whatsapp"></i>
            </a>


        </div>
    </nav>


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
                            {{ Str::limit($noticias->cuerpo, 400, '...') }}
                        </p>
                    </div>

                    <div class="row">



                        @if (strlen($noticias->cuerpo) > 400)
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


                        <div class="col-3">
                            @if ($noticias->adjunto)

                                    <div class="contenedor-textos2">
                                        <a class="cta" href="{{ $noticias->adjunto }}"
                                            target="_blank">Ver adjunto</a>
                                    </div>

                            @endif
                        </div>

                    </div>
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
        {{-- <div class="d-flex justify-content-end pr-5"> --}}
            {{ $not->links() }}
        </div>
    </div>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="mensaje"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>
















<script src="{{ asset('js/modal.js') }}"></script>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="mensaje"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

</body>
