@extends('layouts.plantilla')

@section('title', 'Somos Más')

@section('content')
    <div class="row">
        <div class="col-4 offset-4 p-4">
            <h2 class="titulo">Galería de fotos</h2>
        </div>
    </div>
    <main class="container d-flex justify-content-center align-items-center p-5 pr-10">
        @php $cant = 0; @endphp
        <div class="carrusel-itemss">
            @foreach ($galeria as $galerias)
                @php $cant = $cant+1; @endphp
                <?php $imgs = explode(',', $galerias->imagenes); ?>
                <div class="carrusel-itemm">
                    <div class="card">
                        <div class="card_img">
                            <img src="../images/galeria1/{{ $foto[$cant - 1] }}"alt="">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $galerias->titulo }}</h5>
                            <br>
                            <button type="button" class="ctn"
                                data-toggle="modal"data-target="#myModal<?php echo $cant; ?>">Ver fotos</button>
                            <div class="vermaa" style="padding-top: 10%; padding-left:0%">
                                Actualización: {{ $galerias->updated_at }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade bd-example-modal-xl" id="myModal<?php echo $cant; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content justify-content-center">
                            <div class="modal-header">
                                <header class="h2">
                                    {{ $galerias->titulo }}
                                </header>
                                <button type="button" class="close" data-dismiss="modal">
                                    &times;</button>
                            </div>

                            <div class="swiper-container swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($imgs as $img)
                                        <div class="swiper-slide"
                                            style=" display:flex; justify-content: center; align-items: center;">
                                            <img src="../images/galeria1/<?php echo $img; ?>"
                                                alt=""class="responsive-img materialboxed">
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </main>




    <script src="{{ asset('js/swiper_galeria.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

@endsection
