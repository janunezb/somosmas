@extends('layouts.etapanavega')

@section('title', 'Portal Navega')

@section('content')

    <section id="poldeseguridad" class="container d-flex justify-content">
        <div class="row">
            <div class="col-6 p-3">
                <p>
                    <br>
                    <br>
                    <hr>
                </p>
                <h4>Política de seguridad y salud en el trabajo</h4>
                <p>
                    "Desde la dirección de Liwa estamos comprometidos con la implementación, desarrollo, mejora continua y
                    cumplimiento legal del sistema de gestión de Seguridad y salud en el trabajo como en nuestra gestión
                    ambiental a través de la asignación de los diferentes recursos necesarios para tal fin; identificando y
                    gestionando los diferentes peligros y riesgos a los que se encuentran expuestos nuestros colaboradores
                    como los terceros al igual que los diferentes aspectos ambientales que se puedan generar durante el
                    desarrollo de nuestras diferentes actividades; vigilando no solo el cumplimiento legal de nuestros
                    procesos sino el de los terceros que hagan parte del desarrollo de nuestras actividades"
                </p>

                <h4>Objetivos del SGSST</h4>
                @foreach($objetivos as $objetivo)
                    <p> <i class="bi bi-check-circle p-2"></i> {{ $objetivo->nombre }}</p>
                @endforeach
            </div>

            <div class="col-6">
                <img src="{{ asset('images/logos/navega.png') }}" alt="">
            </div>

            <div class="col-6">
                <hr>
                <h4>Etapas 1 a la 4 del SGSST</h4>
                <p>
                @foreach($etapas as $index => $etapa)
                @if($etapa->grupo==1)
                    <a href="#etapa{{$index+1}}" class="btn"><i class="bi bi-check-circle p-2"></i>{{$index+1}}. {{ $etapa->nombre }}</a>
                    <br>
                @endif
                @endforeach
                </p>
            </div>
        </div>
    </section>
    
    <div class="cuadrado">
        <div class="row">
            <div class="col-12 fs-2">
                Fases del sistema de gestión: {{ $etapas[0]->nombre }}
            </div>
        </div>
    </div>
    
    <section id="etapa1" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">Etapa: 1 <i class="bi bi-caret-right-square-fill"></i></p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>
            
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==1 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==1 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==1 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==1 && $evidencia->grupo==4)
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
                Fases del sistema de gestión: {{ $etapas[1]->nombre }}
            </div>
        </div>
    </div>

    <section id="etapa2" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">Etapa: 2 <i class="bi bi-caret-right-square-fill"></i></p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==2 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==2 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==2 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==2 && $evidencia->grupo==4)
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
                Fases del sistema de gestión: {{ $etapas[2]->nombre }}
            </div>
        </div>
    </div>

    <section id="etapa3" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">Etapa: 2 <i class="bi bi-caret-right-square-fill"></i></p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==3 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==3 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==3 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==3 && $evidencia->grupo==4)
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
                Fases del sistema de gestión: {{ $etapas[3]->nombre }}
            </div>
        </div>
    </div>

    <section id="etapa4" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">Etapa: 4 <i class="bi bi-caret-right-square-fill"></i></p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==4 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==4 && $evidencia->grupo==2)
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
            <h4>Etapas 1 a la 4 del SGSST</h4>
            <p class="et">
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==1)
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