@extends('layouts.nav')

@section('title', 'Somos Más')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cultura</title>
</head>
<body>

    <main class="container d-flex justify-content-center align-items-center p-5">




         {{-- <div class="row text-center">
             <div class="">
                 <h2 id="fechas" class="titulo">Fechas Especiales</h2>
             </div>
             <div class="">
                <p>Un pequeño homenaje para las mujeres que hacen parte de nuestro ecosistema.
                    ¡¡¡Feliz día para todas ustedes!!!</p>
             </div>
            </div> --}}



        <div class="container text-center aling-items-center">
            <div class="row aling-items-center">
                <div class="col-6 offset-3">
                    <h2 class="titulo" id="fechas">Fechas Especiales</h2>
                </div>
                <div class="col-12">
                    <p>
                        Un pequeño homenaje para las mujeres que hacen parte de nuestro ecosistema.
                    ¡¡¡Feliz día para todas ustedes!!!
                    </p>
                </div>
                <div class="col-12">

                    <a href="https://youtu.be/d1drzgRUekY" class="glightbox play-btn" target="_blank">
                        <img style="width: 50%; height:100%" src="{{ asset('images/mujer.jpg') }}" alt="">
                    </a>

                </div>
            </div>

            <p>
                <br>
            </p>

            <div class="row">
                <div class="col-12 p-3">
                    <p>Descubre a continuación la versión completa de cada uno de los videos de nuestras compañeras. Has clic sobre el video que quieras visualizar.</p>
                </div>
            </div>

            <section id="momentos">
                        <div
                        tabindex="-1" aria-labelledby="modal01" aria-hidden="true"
                        class="modal fade" id="modal01"
                        >
                            <div class="modal-dialog modal-lg modal-dialog-center">
                                <div class="modal-content">
                                    <video src="{{ asset('videos/videosg/bleidy.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>

                                </div>
                            </div>

                        </div>
                        <!-- Image2 !-->
                        <div
                        tabindex="-1" aria-labelledby="modal03" aria-hidden="true"
                        class="modal fade" id="modal03"
                        >
                            <div class="modal-dialog modal-lg modal-dialog-center">
                                <div class="modal-content">
                                    <video src="{{ asset('videos/videosg/olga.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                </div>
                            </div>

                        </div>
                        <!-- Image3 !-->
                        <div
                        tabindex="-1" aria-labelledby="modal02" aria-hidden="true"
                        class="modal fade" id="modal02"
                        >
                            <div class="modal-dialog modal-lg modal-dialog-center">
                                <div class="modal-content">
                                    <video src="{{ asset('videos/videosg/catalina.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                </div>
                            </div>

                        </div>
                        <!-- Image4 !-->
                        <div
                        tabindex="-1" aria-labelledby="modal06" aria-hidden="true"
                        class="modal fade" id="modal06"
                        >
                            <div class="modal-dialog modal-lg modal-dialog-center">
                                <div class="modal-content">
                                    <div class="modal-content">
                                        <video src="{{ asset('videos/videosg/claudiap.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Image5 !-->
                        <div
                        tabindex="-1" aria-labelledby="modal07" aria-hidden="true"
                        class="modal fade" id="modal07"
                        >
                            <div class="modal-dialog modal-lg modal-dialog-center">
                                <div class="modal-content">
                                    <video src="{{ asset('videos/videosg/liliana.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                </div>
                            </div>

                        </div>
                        <!-- Image6 !-->
                        <div
                        tabindex="-1" aria-labelledby="modal05" aria-hidden="true"
                        class="modal fade" id="modal05"
                        >
                            <div class="modal-dialog modal-lg modal-dialog-center">
                                <div class="modal-content">
                                    <video src="{{ asset('videos/videosg/maribel.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                </div>
                            </div>

                        </div>
                        <!-- Image7 !-->
                        <div
                        tabindex="-1" aria-labelledby="modal04" aria-hidden="true"
                        class="modal fade" id="modal04"
                        >
                            <div class="modal-dialog modal-lg modal-dialog-center">
                                <div class="modal-content">
                                    <video src="{{ asset('videos/videosg/monica.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                </div>
                            </div>

                        </div>
            </section>

            <section id="prueba">
                    <div class="carrusel1">
                        <div class="carrusel-items1">
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal01">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/bleidy.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal02">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/catalina.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal06">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/claudia.jpg') }}" alt="">
                                </a>
                             </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal07">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/liliana.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal05">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/maribel.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal04">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/monica.jpg') }}" alt="">
                                </a>
                             </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal03">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/olga.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
            </section>

            <section id="podcast" class="d-flex justify-content-center align-items-center pt-4">


                <div class="row">
                    <div class="col-4 offset-4">
                        <h2 class="titulo">Tus Podcast</h2>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="texto">Te gustaría escuchar desde la voz de los diferentes lideres de cada una de las empresas, las últimas novedades y lanzamientos. ¡¡Tus Podcast te esperan!!</p>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-4 p-2 offset-2">
                        <div class="card hov-1" style="">
                            <img src="{{ asset('images/logos/spotify.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">

                              <h5 class="card-title">Ahora Somos Liwa</h5>
                              <p class="card-text">Nacimos digitales, somos digitales. Liwa significa acceso y conexion. Liwa es donde el proposito se encuentra con la innovación</p>

                              <a href="https://open.spotify.com/episode/31wpAQW8tTaMMQYWdwE2FT" class="btn btn-outline-dark" target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-4 p-2">
                        <div class="card hov-2" style="">
                            <img src="{{ asset('images/logos/spotify.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">¿Por que cebra y no unicornio?</h5>
                              <p class="card-text">En este episodio invitamos a Juan Diego Gomez uno de los lideres del ecosistema Liwa, quien nos aclara ¿Por que cebra y no unicornio?. </p>

                              <a href="https://open.spotify.com/episode/6PQZIHp9RfUZiEB0sCXBOT" class="btn btn-outline-dark" target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                            </div>

                          </div>
                    </div>

                </div>
                </div>
            </section>

            <section id="comite" class="d-flex justify-content-center align-items-center p-2">
                <div class="row aling items center">
                    <div class="col-8 offset-2">
                        <h2 class="titulo">Conoce tu comite de diversidad e inclusión.</h2>

                    </div>
                    <div class="col-12 texto">
                        <p>En nuestra organización celebramos la Diversidad y le apostamos a la inclusión; es por eso por lo que desde el segundo semestre del 2021 se creó un comité que tiene como objetivo principal “Garantizar y promover al interior de la organización la correcta valoración de la diversidad de pensamiento, creencias e identidades, fomentando ambientes y formas de expresión equitativas e igualitarias que logren un mayor bienestar en la compañía.</p>
                    </div>
                    <div class="col-6 pt-3 fondo">

                        <img src="{{ asset('images/juanma.jpg') }}" class="" alt="...">
                        <p class="h2 juan">Juan Manuel</p>
                        <p class="uno"> Presidente del comite de <br> diversidad e inclusión.</p>
                    </div>
                    <div class="col-6 hola pt-3 fondo1 ">
                        <h3>Comité de diversidad e inclusion.</h3>
                        <p>¿Quiénes hacen parte de nuestro comité?
                            Somos un grupo de personas que creemos que fomentar la empatía nos ayuda a reconocer la diversidad, creemos en el respeto y valoramos la diferencia.
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Presidente: Juan M Sanchez – Sunco Energy</li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Secretaria: Catalina Gallego – Suncolombia</li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Promotor: Ivon Romero – Liwa</li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Contenidos: Irana Carrión – Suncolombia</li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Integrante: Liliana Ravelo – Suncolombia</li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Integrante: Juan Diego Gómez - Suncolombia</li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Integrante: Catalina Jiménez – Suncolombia</li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Integrante: Iván Diaz - Suncolombia</li>
                            </ul>
                            <br>
                            <div class="azul h6">
                                <hr>
                                <p class="h6"> Pronto conocerás mas sobre nosotros, algunas de las actividades que hemos realizado y como puedes hacer parte de ellas.</p>
                                <hr>
                            </div>
                    </div>
                </div>




            </section>

            <section id="mantentevisible" class="d-flex justify-content-center align-items-center p-2">

                <div class="row aling items center">
                    <div class="col-4 offset-4">
                        <h2 class="titulo">Mantente Visible</h2>

                    </div>
                    <div class="col-12 texto">
                        <p>Participa!! compártenos tus opiniones, tus películas, fotografias favoritas, libros, planes de fin de semana, entre miles de tematicas más. Pronto vendrán concursos, foros, donde premiaremos el contenido con más Like, apoya a tus compañeros y también atrévete a ser parte de "Likes", mes a mes premiaremos el mejor contenido. Cual contenido sera el mas popular? ¡¡Descubrámoslo juntos, no te los pierdas!!</p>
                    </div>
                    <div class="col-6 p-3">
                        <article class="card h-100">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="{{ asset('images/Jhon.jpg') }}"  alt="" class="border border-primary border-3 rounded-circle" style="width: 100px; height: 100px;">
                                    <div class="ps-3">
                                        <br>
                                        <h6 class="m-0 h6">Jhon López</h6>
                                        <p class="m-0 h6">Suncolombia</p>
                                    </div>

                                </div>
                                <div>
                                    <div>
                                        <span class="alin">jlopez@suncolombia.com</span>
                                    </div>
                                     <br>

                                    <p class="fs-6 lh-1">“Hola un saludo y abrazo muy especial para todos, hoy les quiero compartir el valor de la experiencia en la vida profesional lo cual podrás comprender a través de un libro que te recomiendo mucho. Además te brindare unos tips de crecimiento personal y laboral. Descúbrelos   !!"</p>

                                    <div class="padrevideo1">
                                        <div class="video1">
                                        <div class=" ratio ratio-16x9">
                                        <video src="{{ asset('videos/Jhon.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                        </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-6 p-3">
                            <article class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <img src="{{ asset('images/carlos.jpg') }}"  alt="" class="border border-primary border-3 rounded-circle" style="width: 100px; height: 100px;">
                                        <div class="ps-3">
                                            <br>
                                            <h6 class="m-0 h6">Jhon López</h6>
                                            <p class="m-0 h6">Suncolombia</p>
                                        </div>

                                    </div>
                                    <div>
                                        <div>
                                            <span class="alin">carlos.herrada@cellvoz.com.co</span>
                                        </div>
                                         <br>

                                        <p class="fs-6 lh-1">“Hola estoy muy feliz de compartir con ustedes a través de este canal,  una pelicula basada en hechos reales muy especial para esta época de fin de año y unión familiar que nos invita a trabajar por nuestros sueños y a superar cualquier limitación que en muchos casos pueden ser oportunidades, un abrazo a todos. Descúbrela !!"</p>
                                        <div class="padrevideo1">
                                            <div class="video1">
                                            <div class=" ratio ratio-16x9">
                                            <video src="{{ asset('videos/carlos.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                            </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </article>
                    </div>

                    <div class="col-6 p-3">
                        <article class="card h-100">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="{{ asset('images/ximena.jpg') }}"  alt="" class="border border-primary border-3 rounded-circle" style="width: 100px; height: 100px;">
                                    <div class="ps-3">
                                        <br>
                                        <h6 class="m-0 h6">Ximena Gonzáles</h6>
                                        <p class="m-0 h6">Libre</p>
                                    </div>

                                </div>
                                <div>
                                    <div>
                                        <span class="alin">xifagori@hotmail.com</span>
                                    </div>
                                     <br>

                                    <p class="fs-6 lh-1">“Hola estoy muy feliz de saludarlos a todos y compartirles mis mejores recomendados; conocerán paisajes maravillosos, un libro que me envolvió con su historia y una película que te invita a valorar un gran tesoro como es tu familia. Regálame muchos likes !!"</p>
                                    <div class="padrevideo1">
                                        <div class="video1">
                                        <div class=" ratio ratio-16x9">
                                        <video src="{{ asset('videos/ximena.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                        </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </article>
                  </div>

                <div class="col-6 p-3">
                    <article class="card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <img src="{{ asset('images/paula.jpeg') }}"  alt="" class="border border-primary border-3 rounded-circle" style="width: 100px; height: 100px;">
                                <div class="ps-3">
                                    <br>
                                    <h6 class="m-0 h6">Paula Oviedo</h6>
                                    <p class="m-0 h6">Liwa</p>
                                </div>

                            </div>
                            <div>
                                <div>
                                    <span class="alin">paula.oviedo@cellvoz.com.co</span>
                                </div>
                                 <br>

                                <p class="fs-6 lh-1">"Hola! que alegría saludarlos soy Paula y a través de "Somos más " les quiero recomendar dos excelentes libros  desarrollados en ambientaciones históricas y llenas de misterio que estoy segura los conectaran con sus personajes. Les envió un fuerte abrazo a todos."


                                </p>
                                <div class="padrevideo1">
                                    <div class="video1">
                                    <div class=" ratio ratio-16x9">
                                    <video src="{{ asset('videos/paula.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                    </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-6 p-3">
                    <article class="card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <img src="{{ asset('images/vanesa.jpg') }}"  alt="" class="border border-primary border-3 rounded-circle" style="width: 100px; height: 100px;">
                                <div class="ps-3">
                                    <br>
                                    <h6 class="m-0 h6">Vanesa pinzon</h6>
                                    <p class="m-0 h6">Suncoenergy</p>
                                </div>

                            </div>
                            <div>
                                <div>
                                    <span class="alin">vanesa.pinzon@suncoenergy.com.co</span>
                                </div>
                                 <br>

                                <p class="fs-6 lh-1">"Vengo con unos recomendados que te van a encantar; estoy segura de que no conocías lugares hermosos y llenos de historias de piratas, también descubriremos un lugar para que practiques tus deportes extremos y unos libros fascinantes. Se que me darás tu like. ”
                                </p>
                                <div class="padrevideo1">
                                    <div class="video1">
                                    <div class=" ratio ratio-16x9">
                                    <video src="{{ asset('videos/vanesa.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                    </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </article>
              </div>

                 <div class="col-6 p-3">
                    <article class="card h-100">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <img src="{{ asset('images/anamaria.jpg') }}"  alt="" class="border border-primary border-3 rounded-circle" style="width: 100px; height: 100px;">
                            <div class="ps-3">
                                <br>
                                <h6 class="m-0 h6">Ana Maria</h6>
                                <p class="m-0 h6">Navega</p>
                            </div>

                        </div>
                        <div>
                            <div>
                                <span class="alin">ana.mondragon@navega.com.co</span>
                            </div>
                             <br>

                            <p class="fs-6 lh-1">"Hola soy Ana maría y espero sorprenderte con mis recomendados, un lugar maravilloso con una energía única y al que me gustaría invitarlos, un excelente libro de crecimiento personal y una película inolvidable . Espero tus corazones!!"
                            </p>
                            <div class="padrevideo1">
                                <div class="video1">
                                <div class=" ratio ratio-16x9">
                                <video src="{{ asset('videos/anamaria.mp4') }}" title="" allowfullscreen="" type="video/mp4" controls=""></video>
                                </div>
                                </div>
                                </div>
                        </div>
                    </div>
                  </article>
                </div>




                </div>
            </section>

            <section id="#momentos" class="d-flex justify-content-center align-items-center p-2">
                <div class="row aling items center">
                    <div class="col-4 offset-4">
                        <h2 class="titulo">Momentos</h2>

                    </div>
                    <div class="col-12 texto">
                        <p>Quien dijo que el tiempo no se puede detener, disfruta de esta galería.</p>
                    </div>


                </div>
            </section>

            <section id="galleryy">
                    <div class="carrusel">
                        <div class="carrusel-items">
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/0.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/1.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/2.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/3.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/4.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/5.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/6.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/7.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/8.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/9.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/10.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/11.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/12.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/13.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/14.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/15.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/16.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/17.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/18.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/19.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/20.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/21.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/22.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/23.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/24.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/25.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/26.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/27.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/28.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/29.jpg')}}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{asset('images/galeria/30.jpg')}}" alt="">
                            </div>

                        </div>
                    </div>
                 </div>



            </section>
    </main>

            <section id="red" class="d-flex justify-content-center align-items-center rounded pt-5">
                <div class="footer bg-dark text-color:white">
                    <div class="row p-5">
                    <div class="col-4">
                            <h2><strong style="color: #ff0080">Red De Apoyo:</strong> </h2>
                            <p style="color: white">Red de apoyo en caso de emergencia: Navega, Libre, Liwa, Suncoenergy, Suncolombia. Recuerde: Número general de emergencias: 123
                                Estamos para servirte cuenta con nosotros
                                WhatsApp profesionales HSE: Chia-Fusagasuga-Bogota</p>

                                <a href="https://wa.me/573118076877/?text=Soy%20tu%20apoyo%20en%20Navega" class="btn btn-success" target="_blank"> <i class="bi bi-whatsapp"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=573016373640&text=Soy%20tu%20apoyo%20en%20Libre." class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=573245522551&text=Soy%20tu%20apoyo%20en%20Bogota." class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=573223097701&text=Soy%20tu%20apoyo%20en%20Bogota." class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                                <p></p>
                                <button type="button" class="btn btn-outline-light" >
                                    Chía -Fusagasugá -Bogotá
                                </button>

                        </div>
                        <div class="col-4">
                            <h5><strong style="color: #ff0080">Direcciones oficinas: Recuerde número general emergencias: 123/ Numero general Cruz Roja: 132 </strong> </h5>
                            <p style="color: white">Oficina Bogotá de la 127: Barrio tierra linda-Calle 127b bis #49-48.
                                Oficina Navega Centro comercial Vivenza Plaza: Cra 10 # 0-49 Sur Local 148 Chía, Cundinamarca.
                                Oficina Libre Centro comercial Escorial Center: Carrera 6 # 07-36 Local 317 Fusagasugá, Cundinamarca.</p>

                                <h5><strong style="color: #ff0080">Clínica más cercanas ARL Sura:</strong></h5>
                                <p style="color: white">Oficina Bogotá de la 127: Cruz roja Norte: Autopista norte con calle 145 / Clínica los Nogales Calle 95-23-61 / Clínica Vip calle 97#23-10 /
                                    Oficina Navega Chía: Hospital San Antonio de Chía, carrera 10 No. 8-24 Chía-Tel:5140707.
                                    Oficina Libre Fusagasugá: Hospital San Rafael: Diagonal 23 12 - 64 Fusagasugá - Cundinamarca / Clínica Belén Fusagasugá: Calle 17 # 12-27</p>
                        </div>
                        <div class="col-4">
                            <h5><strong style="color: #ff0080">Línea de reporte de AT (ARL Sura):</strong></h5>
                            <p style="color: white">Oficina Bogotá de la 127: 4055911
                                Oficina Navega Chía : 4055911
                                Oficina Libre Fusagasuga: 4055911</p>
                            <h5><strong style="color: #ff0080">Cuadrantes de la policía. Recuerde número general policía 112.</strong></h5>
                            <p style="color: white">Oficina Bogotá de la 127: Cuadrante 3002005460-3002005460
                                    Oficina Navega Chía: Caí Guaymaral 313 3490791 / Cuadrantes: 3017791812 - 3212464768
                                    Oficina Libre Fusagasugá: Cuadrante: 3212475311</p>
                            <h5><strong style="color: #ff0080">Bomberos. Recuerde número general bomberos 119.</strong></h5>
                            <p style="color: white">Oficina Bogotá de la 127: Estación de bomberos Caobos: 6144105-6143290-3822500/ Estación de bomberos Cedritos: 6724913
                                Oficina Navega Chía: Bomberos Chía: 8844595-8844587 / 300 1234567
                                Oficina Libre Fusagasugá: 8676736 / 311 5853577</p>
                    </div>



                </div>
                    </div>

                        </div>
            </section>






  <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>

@endsection
