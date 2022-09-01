@extends('layouts.plantilla')

@section('title', 'Somos Más')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Somos Más</title>
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    </head>

    <body>


        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($contenido as $banner)
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $loop->index }}"
                        class="@if ($loop->index == 0) active @endif" aria-current="true"
                        aria-label="Slide {{ $banner->id }}"></button>
                @endforeach
            </div>


            <div class="carousel-inner">
                @foreach ($contenido as $banner)
                    <div class="carousel-item @if ($loop->index == 0) active @endif" data-bs-interval="4000">
                        <img src="{{ $banner->imagen }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!--h5 style="color: black">{{ $banner->nombre }}</h5>
                                        <p style="color : black">
                                            {{ $banner->titulo }}
                                        </p-->
                        </div>
                    </div>
                @endforeach
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>







        {{-- Contenido Principal --}}
        <main class="container d-flex justify-content-center align-items-center p-5 pr-10">
            <div class="row">
                <div class="col-12">
                    @php $cant = 0; @endphp
                    @foreach ($noticia as $noticias)
                        @php $cant = $cant+1; @endphp
                        <div class="row">
                            <div class="col-6 " style="padding-right: 1px;">

                                <h1>{{ $noticias->titulo }}</h1>
                                <div>


                                    <p class="nuevaa">
                                        {{ Str::limit($noticias->cuerpo, 800, '...') }}
                                    </p>


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

                                                                <header style="" class="h2">
                                                                    {{ $noticias->titulo }}</header>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="contenido">
                                                                <div class="row pt-2">
                                                                    <div class="" style="float: left">
                                                                        <img src="{{ $noticias->imagen }}" class="img-fluid"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="pb-5" style="padding-right: 1px;">
                                                                        <div>
                                                                            <p class="nuevaa"
                                                                                style="background-color: #FAFAFA">
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
                                                <div class="">
                                                    <a class="btn btn-outline-dark" href="{{ $noticias->adjunto }}"
                                                        target="_blank">Ver adjunto</a>
                                                </div>
                                            </div>
                                        @endif


                                    </div>

                                </div>
                                <div class="vermas" style="padding-top: 20%; padding-left:76%">
                                    <a href="{{ route('inicio.noticia') }}">Más noticias <i
                                            class="bi bi-arrow-right-square"></i> </a>
                                </div>
                            </div>
                            <div class="col-6 noticia">
                                <img src="{{ $noticias->imagen }}" class="" alt="">
                            </div>

                        </div>
                    @endforeach




                    <section id="induccion">
                        <div class="row">
                            <div class="col-12">
                                <p>

                                    <br>
                                    <br>
                                    <hr>
                                </p>
                            </div>
                        </div>

                    </section>

                    <p></p>
                    <section id="Induccion" class="">
                        <div class="row">
                            <div class="col-4 offset-4">
                                <h2 class="titulo">Inducción</h2>
                            </div>
                        </div>


                        <div class="container-1">

                            <div class="card-1">
                                <img src="{{ asset('images/induccion1.jpg') }}" alt="">
                                <h4 style="text-align: justify">Inducción Colaboradores áreas administrativas.</h4>
                                <p style="text-align: justify">
                                    Bienvenido! Para nosotros tu bienestar es muy importante, disfruta de esta
                                    sección donde podrás entender conceptos
                                    básicos de nuestro sistema de gestión de seguridad y salud en el trabajo.
                                    Tu compromiso y el nuestro es velar por tu seguridad.

                                </p>

                                <a href="https://forms.gle/yCHoN6QrjfK2RVZC9" class="btn btn-outline-dark"
                                    target="_blank"><i class="bi bi-arrow-right"></i> Ingresar</a>

                            </div>

                            <div class="card-1">
                                <img src="{{ asset('images/induccion2.jpg') }}" alt="">
                                <h4 style="text-align: justify">Inducción Colaboradores técnicos y operativos.</h4>
                                <p style="text-align: justify">
                                    Bienvenido! Tu trabajo es fundamental para el desarrollo del negocio, queremos
                                    garantizar que lo realices con seguridad.
                                    En esta sección conocerás a profundidad la manera de controlar y gestionar los riesgos
                                    asociados a tu actividad,
                                    tu compromiso y el nuestro es velar por tu bienestar.

                                </p>

                                <a href="https://forms.gle/3Wiikuws4TMMqEiTA" class="btn btn-outline-dark"
                                    target="_blank"><i class="bi bi-arrow-right"></i> Ingresar</a>

                            </div>

                        </div>


                    </section>

                    <hr>

                 <section id="formaciones" class="">
                        <div class="row">
                            <div class="col-6 offset-3">
                                <h2 class="titulo">Formaciones Del Mes</h2>
                            </div>
                        </div>

                        <br>

                        <div class="">


                            <div class="carrusel-itemss">
                                @foreach ($formacion as $formaciones)
                                <div class="carrusel-itemm">

                                        <div class="card" style="widtyh: 18rem;">
                                            <img src="{{ $formaciones->imagen }}" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $formaciones->titulo }}</h5>

                                                <p class="card-text">
                                                    {{ $formaciones->cuerpo }}
                                                </p>
                                                <br>
                                                <a href="{{ $formaciones->adjunto }}" class="btn btn-outline-dark"
                                                    target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                                            </div>
                                        </div>
                                </div>

                                @endforeach
                            </div>
                        </div>

                </section>

                    <hr>

                    <section id="formaciones Comites" class="d-flex justify-content-center align-items-center p-2">
                        <div class="row">
                            <div class="col-6 offset-3">
                                <h2 class="titulo">Formaciones Comités</h2>
                            </div>
                            <div class="row">
                                <div class="col-3 p-2">
                                    <div class="card">
                                        <img src="{{ asset('images/copasst.png') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Formación integrantes del Copasst</h5>
                                            <p class="card-text">Dirigida a los integrantes del Copasst.</p>
                                            <p class="card-text">Conoce los aspectos básicos de entrada del Copasst.
                                            </p>
                                            <br>
                                            <a href="https://forms.gle/K9qonnyf7TxdHNLy9" class="btn btn-outline-dark"
                                                target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 p-2">
                                    <div class="card" style="">
                                        <img src="{{ asset('images/convivencia.jpg') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Formación integrantes comité de convivencia</h5>
                                            <p class="card-text">Dirigida a los integrantes del comité. </p>
                                            <p class="text-justify crad-text"> Conoce los aspectos básicos de entrada del
                                                comité. </p>
                                            <br>
                                            <a href="https://forms.gle/426pemCcEFMCFG228" class="btn btn-outline-dark"
                                                target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-3 p-2">
                                    <div class="card" style="">
                                        <img src="{{ asset('images/vial.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Formación integrantes del comité vial</h5>
                                            <p class="card-text">Dirigida a los integrantes del comité. </p>
                                            <p class="text-justify card-text">Conoce los aspectos básicos de entrada del
                                                comité.

                                            </p>
                                            <br>
                                            <a href="https://forms.gle/CzSyNU3jCNRFRFuB8" class="btn btn-outline-dark"
                                                target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 p-2">
                                    <div class="card" style="">
                                        <img src="{{ asset('images/ambiental.jpg') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Formación integrantes del comité ambiental</h5>
                                            <p class="card-text">Dirigida a los integrantes del comité. </p>
                                            <p class="text-justify card-text"> Conoce los aspectos básicos de entrada del
                                                comité.


                                            </p>
                                            <br>
                                            <a href="https://forms.gle/YauqYbGhC6Exoxu69" class="btn btn-outline-dark"
                                                target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section id="medicina">
                        <p>
                            <br>
                            <br>
                            <hr>

                        </p>
                    </section>

                    <section id="Medicina" class="d-flex justify-content-center align-items-center p-2">
                        <div class="row">
                            <div class="col-6 offset-3 ">
                                <h2 class="titulo">Medicina Preventiva</h2>
                            </div>
                            <div class="col-12">
                                <p class="texto">A través de las actividades de esta sección juntos identificaremos
                                    situaciones de riesgo asociadas al COVID 19 y frente a otras situaciones que puedan
                                    afectar tu salud</p>
                            </div>
                            <div class="row">
                                <div class="col-4 p-2">
                                    <button class="botonn">
                                        <div>
                                            <i class=" fa-solid fa-virus-covid"></i>
                                            <h5 class="card-title">Encuesta de prevención COVID-19</h5>
                                            <p class="card-text h6">Debes realizarla mínimo 1 ves a la semana durante cada
                                                mes. Tiempo estimado 1 minuto.</p>
                                            <a href="https://forms.gle/RuYsLP2iRA1N5wEh9" class="btn btn-outline-light"
                                                target="_blank"><i class="icon bi bi-arrow-right"></i> Ingresa</a>

                                        </div>
                                    </button>
                                </div>
                                <div class="col-4 p-2">
                                    <button class="botonn1">
                                        <div>
                                            <span class="iconify" data-icon="ri:user-heart-line"></span>
                                            <h5 class="card-title">Encuesta de perfil sociodemográfico</h5>
                                            <p></p>

                                            <p class="card-text h6">Realizada en Enero 2022. Tiempo estimado 5 minutos.</p>
                                            <p></p>
                                            <a href="https://forms.gle/LRGMRZASXysFLKKj9" class="btn btn-outline-light"
                                                target="_blank"><i class="icon bi bi-arrow-right"></i> Ingresa</a>

                                        </div>
                                    </button>


                                </div>
                                <div class="col-4 p-2">
                                    <button class="botonn2">
                                        <div>
                                            <span class="iconify" data-icon="ri:open-arm-line"></span>
                                            <h5 class="card-title">Gestión de riesgos ergonómicos</h5>
                                            <p></p>

                                            <p class="card-text h6">Enfoque cargas y posturas. Tiempo estimado 5 minutos.
                                            </p>
                                            <p></p>
                                            <a href="https://forms.gle/3jxiPHVHRMWnivkp7" class="btn btn-outline-light"
                                                target="_blank"><i class="icon bi bi-arrow-right"></i> Ingresa</a>

                                        </div>
                                    </button>

                                </div>

                            </div>

                        </div>
                    </section>

                    <section id="seguridadindustrial">
                        <p>
                            <br>
                            <br>
                            <hr>

                        </p>
                    </section>

                    <section id="SeguridadIndustrial" class="d-flex justify-content-center align-items-center p-2">
                        <div class="row">
                            <div class="col-6 offset-3">
                                <h2 class="titulo">Seguridad Industrial</h2>
                            </div>
                            <div class="col-12">
                                <p class="texto">Eres el actor principal en la identificación de los peligros y riesgos
                                    que se puedan presentar en tu área de trabajo; con tu ayuda los identificaremos y
                                    gestionaremos mucho mejor.</p>
                            </div>
                            <div class="row">
                                <div class="col-4 p-2">
                                    <button class="botonn3">
                                        <div>
                                            <span class="iconify" data-icon="ci:user-voice"></span>
                                            <h5 class="card-title">Reportes de peligros y riesgos</h5>
                                            <p class="card-text h6">Realízala en enero 2022. Tiempo estimado 5 minutos;
                                                aplica para todos
                                                los colaboradores.</p>
                                            <a href="https://forms.gle/sFSS61k8rNVyuuSN7" class="btn btn-outline-light"
                                                target="_blank"><i class="icon bi bi-arrow-right"></i> Ingresa</a>

                                        </div>
                                    </button>


                                </div>
                                <div class="col-4 p-2">

                                    <button class="botonn4">
                                        <div>
                                            <span class="iconify" data-icon="ri:hand-heart-fill"></span>
                                            <h5 class="card-title">Como es tu gestión frente al SGSST</h5>
                                            <p class="card-text h6">Realízala en enero 2022. Tiempo estimado 5 minutos;
                                                aplica para todos
                                                los colaboradores.</p>
                                            <a href="https://forms.gle/gVAaSMWJjCnLbica7" class="btn btn-outline-light"
                                                target="_blank"><i class="icon bi bi-arrow-right"></i> Ingresa</a>

                                        </div>
                                    </button>

                                </div>
                                <div class="col-4 p-2">

                                    <button class="botonn5">
                                        <div>
                                            <span class="iconify" data-icon="ri:hand-heart-fill"></span>
                                            <h5 class="card-title">Tomémonos un café</h5>
                                            <p></p>
                                            <p class="card-text h6">Requieres atención o apoyo frente a algún peligro
                                                solicítalo aquí.</p>
                                            <p></p>
                                            <a href="https://forms.gle/s8ns9EERMzbMUoNv8" class="btn btn-outline-light"
                                                target="_blank"><i class="icon bi bi-arrow-right"></i> Ingresa</a>

                                        </div>
                                    </button>


                                </div>

                            </div>

                        </div>
                    </section>

                    <section id="seguridadvial">
                        <p>
                            <br>
                            <br>
                            <hr>

                        </p>
                    </section>

                    <section id="SeguridadVial" class="d-flex justify-content-center align-items-center p-2">
                        <div class="row">
                            <div class="col-6 offset-3">
                                <h2 class="titulo">Seguridad Vial</h2>

                            </div>
                            <div class="col-12">
                                <p class="texto"> El riesgo vial está presente en nuestro día a día y debemos gestionarlo
                                    de manera
                                    preventiva.</p>
                            </div>
                            <div class="row">
                                <div class="col-4 p-2">
                                    <button class="botonn6">
                                        <div>
                                            <span class="iconify" data-icon="ri:roadster-fill"></span>
                                            <h5 class="card-title">Encuesta De Seguridad Vial</h5>
                                            <p></p>
                                            <p class="card-text h6">Realízala en enero 2022. Tiempo estimado 5 minutos;
                                                aplica para todos
                                                los colaboradores.</p>
                                            <p></p>
                                            <a href="https://forms.gle/xBF7h7eCq8fBxD5z8" class="btn btn-outline-light"
                                                target="_blank"><i class="icon bi bi-arrow-right"></i> Ingresa</a>

                                        </div>
                                    </button>

                                </div>
                                <div class="col-4 p-2">
                                    <button class="botonn7">
                                        <div>
                                            <span class="iconify" data-icon="ri:user-3-fill"></span>
                                            <h5 class="card-title">Formación teórica para conductores</h5>
                                            <p class="card-text h6">Dirigida a conductores que se desplazan en ellos con
                                                fines de la actividad económica de la empresa.</p>
                                            <a href="https://forms.gle/YDDPqcozj3B8cYoB8" class="btn btn-outline-light"
                                                target="_blank"><i class="icon bi bi-arrow-right"></i> Ingresa</a>

                                        </div>
                                    </button>


                                </div>
                                <div class="col-4 p-2">

                                    <button class="botonn8">
                                        <div>
                                            <span class="iconify" data-icon="ri:discuss-line"></span>
                                            <h5 class="card-title">Reportes de riesgos en la vía</h5>
                                            <p class="card-text h6">Es importante que conozcas los peligros con el fin de
                                                prevenir accidentes.
                                                Tiempo estimado 5 minutos; aplica para todos.</p>
                                            <a href="https://forms.gle/pTuqrBD4ccGR4e7i6" class="btn btn-outline-light"
                                                target="_blank"><i class="icon bi bi-arrow-right"></i> Ingresa</a>

                                        </div>
                                    </button>


                                </div>

                            </div>

                        </div>
                    </section>

                    <section id="avance">
                        <p>
                            <br>
                            <br>
                            <hr>

                        </p>
                    </section>

                    <section id="Avance" class="d-flex justify-content-center align-items-center p-2">
                        <div class="row">
                            <div class="col-6 offset-3">
                                <h2 class="titulo">Avance del SGSST</h2>
                            </div>
                            <div class="row">
                                <div class="col-4 p-2">
                                    <img src="{{ asset('images/equipo.jpg') }}" alt="">
                                </div>
                                <div class="col-8">
                                    <h3> Apoya a tu empresa a llegar a la meta.</h3>
                                    <br>
                                    <p> ¡¡Cuál carrito llegara primero a la meta!! La barra de progreso de cada carrito ira
                                        avanzando hacia la meta a medida que el 100% de las personas de cada compañía
                                        realizan las actividades planificadas durante el mes.</p>
                                    <br>
                                    <img src="{{ asset('images/porcentg.jpg') }}" alt="">
                                </div>
                                <div class="col-12">
                                    <h3 class="align-items-center">Actividades para que tu sgsst avance.</h3>
                                    <p>Verifica que ya cuentas con tu inducción, de igual modo consulta las formaciones
                                        planificadas durante el mes y cuál te aplica. Para finalizar consulta si ya
                                        realizaste las encuestas de medicina preventiva, seguridad industrial y seguridad
                                        vial. Si ya cuentas con tu Inducción, tus formaciones y la participación en las
                                        encuestas; eres un campeón y has aportado al avance del carrito del sgsst de tu
                                        empresa hacia la meta. Tienes alguna duda estamos 24/7 para ayudarte a través de
                                        nuestro canal de WhatsApp en cualquier temática o deseo de participar en nuestras
                                        diferentes campañas.</p>
                                </div>


                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </main>



        <section id="redapoyo" class="d-flex justify-content-center align-items-center rounded">
            <div class="footer bg-dark text-color:white">
                <div class="row p-5">
                    <div class="col-4">
                        <h2><strong style="color: #ff0080">Red De Apoyo:</strong> </h2>
                        <p style="color: white">Red de apoyo en caso de emergencia: Navega, Libre, Liwa, Suncoenergy,
                            Suncolombia. Recuerde: Número general de emergencias: 123
                            Estamos para servirte cuenta con nosotros
                            WhatsApp profesionales HSE: Chia-Fusagasuga-Bogota</p>

                        <a href="https://wa.me/573118076877/?text=Soy%20tu%20apoyo%20en%20Navega" class="btn btn-success"
                            target="_blank"> <i class="bi bi-whatsapp"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=573016373640&text=Soy%20tu%20apoyo%20en%20Libre."
                            class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=573245522551&text=Soy%20tu%20apoyo%20en%20Bogota."
                            class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=573223097701&text=Soy%20tu%20apoyo%20en%20Bogota."
                            class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <p></p>
                        <button type="button" class="btn btn-outline-light">
                            Chía -Fusagasugá -Bogotá
                        </button>

                    </div>
                    <div class="col-4">
                        <h5><strong style="color: #ff0080">Direcciones oficinas: Recuerde número general emergencias: 123/
                                Numero general Cruz Roja: 132 </strong> </h5>
                        <p style="color: white">Oficina Bogotá de la 127: Barrio tierra linda-Calle 127b bis #49-48.
                            Oficina Navega Centro comercial Vivenza Plaza: Cra 10 # 0-49 Sur Local 148 Chía, Cundinamarca.
                            Oficina Libre Centro comercial Escorial Center: Carrera 6 # 07-36 Local 317 Fusagasugá,
                            Cundinamarca.</p>

                        <h5><strong style="color: #ff0080">Clínica más cercanas ARL Sura:</strong></h5>
                        <p style="color: white">Oficina Bogotá de la 127: Cruz roja Norte: Autopista norte con calle 145 /
                            Clínica los Nogales Calle 95-23-61 / Clínica Vip calle 97#23-10 /
                            Oficina Navega Chía: Hospital San Antonio de Chía, carrera 10 No. 8-24 Chía-Tel:5140707.
                            Oficina Libre Fusagasugá: Hospital San Rafael: Diagonal 23 12 - 64 Fusagasugá - Cundinamarca /
                            Clínica Belén Fusagasugá: Calle 17 # 12-27</p>
                    </div>
                    <div class="col-4">
                        <h5><strong style="color: #ff0080">Línea de reporte de AT (ARL Sura):</strong></h5>
                        <p style="color: white">Oficina Bogotá de la 127: 4055911
                            Oficina Navega Chía : 4055911
                            Oficina Libre Fusagasuga: 4055911</p>
                        <h5><strong style="color: #ff0080">Cuadrantes de la policía. Recuerde número general policía
                                112.</strong></h5>
                        <p style="color: white">Oficina Bogotá de la 127: Cuadrante 3002005460-3002005460
                            Oficina Navega Chía: Caí Guaymaral 313 3490791 / Cuadrantes: 3017791812 - 3212464768
                            Oficina Libre Fusagasugá: Cuadrante: 3212475311</p>
                        <h5><strong style="color: #ff0080">Bomberos. Recuerde número general bomberos 119.</strong></h5>
                        <p style="color: white">Oficina Bogotá de la 127: Estación de bomberos Caobos:
                            6144105-6143290-3822500/ Estación de bomberos Cedritos: 6724913
                            Oficina Navega Chía: Bomberos Chía: 8844595-8844587 / 300 1234567
                            Oficina Libre Fusagasugá: 8676736 / 311 5853577</p>
                    </div>



                </div>
            </div>

            </div>
        </section>

        <script src="{{-- asset('js/modal.js') --}}"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/new.js') }}"></script>

    </body>

    </html>











@endsection
