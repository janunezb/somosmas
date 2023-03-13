<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.icons-1.8.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splider-js.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper_noti.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min-5.2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min-4.6.css')}}">
    <link rel="stylesheet" href="{{ asset('css/splide-skyblue.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-9.0.bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.icons-1.10.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"> --}}
    
    
    <script src="{{ asset('js/swiper.bundle.min.js') }}"></script>
    <script src="{{ asset('js/splide.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-5.1.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"> </script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/iconify.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top p-3">
        <div class="container-fluid">
        
            <a class="navbar-brand" href="{{ route('inicio.index') }}">
                <strong style="color: #FE3EB2">Somos</strong>Más</a>

            <label for="check" class="checkbtn">
                <i class="fa fa-bars"></i>
            </label>
            <input type="checkbox" id="check" class="check_input">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-ul me-auto mb-2 mb-lg-0 ">
                
                    <li class="nav-item">
                        <a class="menu_nav text-white" href="{{ route('inicio.cultura') }}">Cultura</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu_nav text-white" href="{{ route('inicio.noticia') }}">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu_nav text-white" href="#redapoyo">Red De Apoyo</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu_nav text-white" href="{{ route('inicio.galeria') }}">Galería de fotos</a>
                    </li>

                </ul>

            
                <div class="pr-2">
                
                    <a class="name_nav text-white" style="text-decoration: none">Bienvenido: <b>
                            {{ auth()->user()->nombre }}</b></a>
                            
                </div>
                
                <div class="foto_nav pr-0">
                    @if (auth()->user()->foto)
                    <img src="../images/fotos/{{auth()->user()->foto}}" alt="" class="usuario">
                    @else
                    <img src="{{asset('images/fotonone.jpeg')}}" class="usuario" alt="">
                    @endif
                </div>

                <li class=" nav-link dropdown p-0">
                    <a class="nav-link dropdown-toggle text-white mr-5 pt-2 mt-2" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none"></a>
                        <ul class="dropdown-menu bg" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item mr-3" style="" href="{{ route('inicio.editar_perfil') }}">
                            Mi Perfil</a></li>
                            <li><a class="dropdown-item" id="sesion" style="" href="{{ route('login.destroy') }}">
                            Cerrar Sesión</a></li>
                        </ul>   
                </li>

            
                
            </div>
            

            <a href="https://api.whatsapp.com/send?phone=57{{ env('NUMBER_WHASTAPP') }}" class="bt-wsp"
                target="_blank">
                <i class="bi bi-whatsapp"></i>
            </a>

        </div>
    </nav>

    <!-- <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script> -->

@yield('content') 

</body>

