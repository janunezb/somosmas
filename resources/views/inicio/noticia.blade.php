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
                            {!! Str::limit($noticias->contenido, 800, '...') !!}
                        </p>
                    </div>
                    <div class="row">
                        @if (strlen($noticias->contenido) > 800)
                        <div class="col-3">
                            <button type="button" class="ctn" data-toggle="modal"data-target="#myModal<?php echo $cant; ?>">Ver más</button>
                            <div class="modal fade bd-example-modal-lg"  id="myModal<?php echo $cant; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        {{-- contenido --}}
                                            {{-- TITULO MODAL --}}
                                            <div class="modal-header">                                                                            
                                                <header style="" class="h2">
                                                    {{ $noticias->titulo }}</header>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            {{-- ************* --}}
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-auto">                    
                                                    <div class="row">
                                                        {{-- CUERPO MODAL --}}
                                                        <div class="col-md-8">
                                                            <div>
                                                                <p class="nuevaa"
                                                                    style="background-color: #FAFAFA">
                                                                    {!! $noticias->contenido !!}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        {{-- ************ --}}
                                                        {{-- IMAGEN MODAL --}}
                                                        <div class="col">
                                                                <div class="col-img-noti">
                                                                    <section class="splide"  data-splide='{"type":"loop","perPage":3,"arrows":false,"autoplay":true,"pagination":false,"height":"40rem","direction":"ttb"}'>
                                                                        <div class="splide__track">                                        
                                                                            <ul class="splide__list"> 
                                                                                <?php $imgs = explode(",", $noticias->imagenes);
                                                                                    foreach($imgs as $img){
                                                                                        Log::info($img);?>                                      
                                                                                        <li class="splide__slide">
                                                                                            <img src="../images/noticias/<?php echo $img?>.jpg" alt="">
                                                                                        </li>
                                                                                <?php } ?>
                                                                            </ul>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                        </div>
                                                        {{-- ************ --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /contenido --}}
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if ($noticias->adjunto)
                        <div class="col-3">
                            <div class="contenedor-textos2">
                                <a class="cta" href="{{ $noticias->adjunto }}"target="_blank">Ver adjunto</a>
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
                    
                    <div class="grid grid-<?php echo $cant?>" >
                        <?php $porciones = explode(",", $noticias->imagenes);
                                    foreach($porciones as $porcion){?>      
                        <div class="item">
                          <div class="item-content">
                            <img src="../images/noticias/<?php echo $porcion?>.jpg" class="" alt="">
                          </div>
                        </div>
                        <?php } ?>
                        
                       
                      </div>
                    {{-- <section class="splide slider1">
                        <div class="splide__track">                                        
                            <ul class="splide__list">
                                <?php $porciones = explode(",", $noticias->imagenes);
                                    foreach($porciones as $porcion){?>                                      
                                        <li class="splide__slide">
                                            <img src="../images/noticias/<?php echo $porcion?>.jpg" class="" alt="">
                                        </li>
                                <?php } ?>
                            </ul>  
                        </div>
                    </section> --}}
        </div>

                <span><hr></span>

            </div>
        @endforeach



    </div>
    <br>
    <div class="row">
         <div class="col-auto mx-auto nadaa">

            {{-- {{ $not->links() }} --}}
        </div>
    </div>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="mensaje"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    <script src="{{ asset('../js/splider.js') }}"></script>
    <script src="{{ asset('../js/new.js') }}"></script>

@endsection
