@extends('layouts.etapanavega')

@section('title', 'Portal Navega')

@section('content')
    
    <section id="" class="container d-flex justify-content pt-5">
        <div class="col-6">
            <h4>Etapas 20 a la 22 del SGSST</h4>
            <p class="et">
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==5)
                <a href="#etapa{{$index+1}}" class="btn"><i class="bi bi-check-circle p-2"></i>{{$index+1}}. {{ $etapa->nombre }}</a>
                <br> 
            @endif
            @endforeach
            </p>
        </div> 
    </section>

    <div class="cuadrado">
        <div class="row">
            <div class="col-12 fs-2">
                <P></P>
            Fases del sistema de gestión: {{ $etapas[19]->nombre }}
            <P></P>
            </div>
        </div>
    </div>

    <section id="etapa20" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 20 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==20 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==20 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==20 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==20 && $evidencia->grupo==4)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- <div class="cuadrado">
        <div class="row">
            <div class="col-12 fs-2">
                <P></P>
                Fases del sistema de gestión: {{ $etapas[20]->nombre }}
                <P></P>
            </div>
        </div>
    </div>

    <section id="etapa21" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 21 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>
            <div class="col-3">
                <button class="buton uno"><span>
                    <i class="fa-solid fa-rocket"></i>
                    1. 
                </span>
                </button>
                <p></p>
                </div>
        </div>
    </section> -->

    <div class="cuadrado">
        <div class="row">
            <div class="col-12 fs-2">
                <P></P>
                Fases del sistema de gestión: {{ $etapas[21]->nombre }}
                <P></P>
            </div>
        </div>
    </div>

    <section id="etapa22" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 22 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==22 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==22 && $evidencia->grupo==2)
                <button class="butoon gordo">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==22 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="" class="container d-flex justify-content">
        <div class="col-6">
        <hr>
            <h4>Etapas 20 a la 22 del SGSST</h4>
            <p class="et">
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==5)
                <a href="#etapa{{$index+1}}" class="btn"><i class="bi bi-check-circle p-2"></i>{{$index+1}}. {{ $etapa->nombre }}</a>
                <br> 
            @endif
            @endforeach
            </p>
        </div>
    </section>

    <section id="" class="container d-flex justify-content">
        <div class="col-6">
            <a href="{{route('admin.navega')}}" class="btn"><img src="{{asset('images/logos/navega.png')}}" alt="" width="120" height="100">Navega SGSST</a>
        </div>
    </section>

@endsection
