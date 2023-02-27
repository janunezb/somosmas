@extends('layouts.etapasunco')

@section('title', 'Portal Suncolombia')

@section('content')

    <section id="" class="container d-flex justify-content pt-5">
        <div class="col-6">
            <h4>Etapas 10 a la 14 del SGSST</h4>
            <p class="et">
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==3)
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
            Fases del sistema de gestión: {{ $etapas[9]->nombre }}
            </div>
        </div>
    </div>

    <section id="etapa10" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 10 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==10 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==10 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==10 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==10 && $evidencia->grupo==4)
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
                <P></P>
                Fases del sistema de gestión: {{ $etapas[10]->nombre }}
                <P></P>
            </div>
        </div>
    </div>

    <section id="etapa11" class="container d-flex justify-content pt-4">

        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 11 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==11 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==11 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==11 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==11 && $evidencia->grupo==4)
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
                Fases del sistema de gestión: {{ $etapas[11]->nombre }}
            </div>
        </div>
    </div>

    <section id="etapa12" class="container d-flex justify-content pt-4">

        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 12 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==12 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==12 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==12 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==12 && $evidencia->grupo==4)
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
                Fases del sistema de gestión: {{ $etapas[12]->nombre }}
                <p></p>
            </div>
        </div>
    </div>

    <section id="etapa13" class="container d-flex justify-content pt-4">

        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 13 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>
            
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==13 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==13 && $evidencia->grupo==2)
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
                Fases del sistema de gestión: {{ $etapas[13]->nombre }}
                <p></p>
            </div>
        </div>
    </div>

    <section id="etapa14" class="container d-flex justify-content pt-4">

        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 14 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==14 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==14 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==14 && $evidencia->grupo==3)
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
            <h4>Etapas 10 a la 14 del SGSST</h4>
            <p class="et">
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==3)
                <a href="#etapa{{$index+1}}" class="btn"><i class="bi bi-check-circle p-2"></i>{{$index+1}}. {{ $etapa->nombre }}</a>
                <br> 
            @endif
            @endforeach
            </p>
        </div>
    </section>

    <section id="" class="container d-flex justify-content">
        <div class="col-6">
            <a href="{{route('admin.sunco')}}" class="btn"><img src="{{asset('images/logos/sunco.png')}}" alt="" width="120" height="100">SuncoEnergy SGSST</a>
        </div>
    </section>

@endsection
