@extends('layouts.etapalibre')

@section('title', 'Portal Libre')

@section('content')
   
    <section id="" class="container d-flex justify-content pt-5">
        <div class="col-6">
            <h4>Etapas 15 a la 19 del SGSST</h4>
            <p>
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==4)
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
            Fases del sistema de gestión: {{ $etapas[14]->nombre }}
            <P></P>
            </div>
        </div>
    </div>

    <section id="etapa15" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 15 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==15 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==15 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==15 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==15 && $evidencia->grupo==4)
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
                Fases del sistema de gestión: {{ $etapas[15]->nombre }}
                <P></P>
            </div>
        </div>
    </div>

    <section id="etapa16" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 16 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==16 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==16 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==16 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==16 && $evidencia->grupo==4)
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
                Fases del sistema de gestión: {{ $etapas[16]->nombre }}
                <p></p>
            </div>
        </div>
    </div>

    <section id="etapa17" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 17 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==17 && $evidencia->grupo==1)
                <button class="butoon gordo">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==17 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==17 && $evidencia->grupo==3)
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
                Fases del sistema de gestión: {{ $etapas[17]->nombre }}
                <p></p>
            </div>
        </div>
    </div>

    <section id="etapa18" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-18">
                <p class="h6">
                    Etapa: 18 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==18 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==18 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==18 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==18 && $evidencia->grupo==4)
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
                Fases del sistema de gestión: {{ $etapas[18]->nombre }}
                <p></p>
            </div>
        </div>
    </div>

    <section id="etapa19" class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 19 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                <br>
            </div>
            
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==19 && $evidencia->grupo==1)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==19 && $evidencia->grupo==2)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==19 && $evidencia->grupo==3)
                <button class="buton uno">
                    <span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==19 && $evidencia->grupo==4)
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
            <h4>Etapas 15 a la 19 del SGSST</h4>
            <p>
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==4)
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