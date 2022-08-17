@extends('layouts.nav')

@section('title', 'Somos Más')

@section('content')

{{-- <main class="container d-flex justify-content-center align-items-center p-5">
    <div class="row">
      <div class="col-12">
          <div class="row">
              <div class="col-6">
                @foreach ($not as $noticias)


                  <h1 class="text-aling-center">{{$noticias->titulo}}</h1>
                  <div>
                      <p class="nuevaa" style="background-color: #FAFAFA">
                        {{$noticias->cuerpo}}
                     </p>
                  </div>
              </div>
              <div class="col-6">
                <img src="{{$noticias->imagen}}" alt="" style="border-radius: 10px" width="400px">
              </div>
              @endforeach
          </div>
      </div>
    </div> --}}

    <h1 class="tutulo">Noticias</h1>

    <div class="container-1">
        @foreach ($not as $noticias)
        <div class="card-1">
            <img src="{{$noticias->imagen}}" alt="">
            <h4>{{$noticias->titulo}}</h4>
            <p>
                {{$noticias->cuerpo}}
            </p>

                <a style="align-items: left" data-bs-toggle="mensaje" title="hola" href="" class="btn btn-outline-dark">Ver mas...</a>

                <p
                    style="color: #6a6a6a;
                    font-size: small;
                    padding-top: 10px;
                    padding-bottom: 0;
                    text-align: right ;"

                >
                    Publicado:
                    {{$noticias->updated_at}}
                </p>
        </div>
        @endforeach
    </div>

    {{-- {{$not -> links('pagination::bootstrap-4')}} --}}


@endsection
