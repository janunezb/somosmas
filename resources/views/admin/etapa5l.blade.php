@extends('layouts.etapalibre')

@section('title', 'Portal Libre')

@section('content')

<section id="" class="container d-flex justify-content pt-5"> 
        <div class="col-6">
            <h4>Etapas 5 a la 9 del SGSST</h4>
            <p>
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==2)
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
                Fases del sistema de gestión: {{ $etapas[4]->nombre }}
            </div>
        </div>
    </div>

    <section id="etapa5" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 5 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==5 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==5 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==5 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <div class="cuadrado">
        <div class="row">
            <div class="col-12 fs-2">
                Fases del sistema de gestión: {{ $etapas[5]->nombre }}
            </div>
        </div>
    </div>

    <section id="etapa6" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 6 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==6 && $evidencia->grupo==1)
                <button class="butoon gordo">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <div class="cuadrado">
        <div class="row">
            <div class="col-12 fs-2">
                Conservación de la documentación: {{ $etapas[6]->nombre }}
            </div>
        </div>
    </div>

    <section id="etapa7" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 7 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==7 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==7 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==7 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <div class="cuadrado">
        <div class="row">
            <div class="col-12 fs-2">
                Fases del sistema de gestión: {{ $etapas[7]->nombre }}
            </div>
        </div>
    </div>

    <section id="etapa8" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 8 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==8 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==8 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==8 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==8 && $evidencia->grupo==4)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div> 
        </div>
    </section>

    <div class="cuadrado">
        <div class="row">
            <div class="col-12 fs-2">
                <p></p>
                    Fases del sistema de gestión: {{ $etapas[8]->nombre }}
                <p></p>
            </div>
        </div>
    </div>

    <section id="etapa9" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 9 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==9 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==9 && $evidencia->grupo==2)
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
            <h4>Etapas 5 a la 9 del SGSST</h4>
            <p>
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==2)
                <a href="#etapa{{$index+1}}" class="btn"><i class="bi bi-check-circle p-2"></i>{{$index+1}}. {{ $etapa->nombre }}</a>
                <br> 
            @endif
            @endforeach
            </p>
        </div>
    </section>

    <section id="" class="container d-flex justify-content">
        <div class="col-6">
            <a href="{{route('admin.libre')}}" class="btn"><img src="{{asset('images/logos/libre.png')}}" alt="" width="120" height="100">Libre SGSST</a>
        </div>
    </section>

@endsection
