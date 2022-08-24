<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/72557239af.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">



</head>
<body>




    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('inicio.index')}}"><strong style="color: #ff0080">Somos </strong>Más</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('inicio.index')}}">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('inicio.cultura')}}">Cultura</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('inicio.noticia')}}">Noticias</a>
                  </li>




            </ul>

            <li class="mx-8">
                <p class="text-white">Bienvenido <b> {{auth()->user()->name }}</b></p>
            </li>



              <form class="d-flex">
                <li class="">
                    <a class="btn btn-danger" href="{{route('login.destroy')}}" role="button">Cerrar Sesión</a>
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
        @foreach ($not as $noticias)

        <div class="row pb-4 card-3">
            <div class="col-6 pb-5" style="padding-right: 1px;">

                    <h1>{{ $noticias->titulo }}</h1>
                    <div>
                        <p class="nuevaa">
                            {{Str::limit($noticias->cuerpo, 250, '...')}}
                        </p>
                    </div>

                {{-- Validacion si supera mas de 200 caracteres --}}
                @if ( strlen ($noticias->cuerpo) > 200)
                <input type="checkbox" id="btn-modal">
                <label for="btn-modal" class="lbl-modal">Ver mas</label>
                <div class="modal">
                    <div class="contenedor">
                        <header style="" class="h2">{{ $noticias->titulo }}</header>
                        <label for="btn-modal"><i class="bi bi-x-circle"></i></label>
                        <div class="contenido">
                            <div class="row pb-4">
                                <div class="col-6 pb-5" style="padding-right: 1px;">
                                    <div>
                                        <p class="nuevaa" style="background-color: #FAFAFA">
                                            {{ $noticias->cuerpo }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6" style="float: left">
                                    <img src="{{ $noticias->imagen }}" class="img-fluid" alt=""
                                        style="border-radius: 10px; object-fit: cover;" width="500px" height="350x">
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                @endif

                    {{-- Validacion si supera mas de 200 caracteres --}}


            </div>
            <div class="col-6" style="float: left">
                <img src="{{ $noticias->imagen }}" class="img-fluid" alt=""
                    style="border-radius: 10px; object-fit: cover;" width="500px" height="350x">
            </div>
            <p>
                <br>
                <hr>
            </p>

        </div>



        @endforeach






    </div>

    <br>

    <div class="row">
        <div class="col-6 offset-5">
            {{$not->links()}}
        </div>
    </div>

























      <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="mensaje"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
      </script>

</body>




















