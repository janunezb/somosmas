<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/72557239af.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top p-3">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ route('admin.sunco') }}">Suncolombia</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="{{route('admin.sunco')}}">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Etapas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('admin.etapa5sunco')}}">Etapas 5 a la 9</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.etapa10sunco')}}">Etapas 10 a la 14</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.etapa15sunco')}}">Etapas 15 a la 19</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.etapa20sunco')}}">Etapas 20 a la 22</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-light" style="text-decoration: none" href="{{route ('inicio.portales')}}"><i class="bi bi-house"></i> Regresar</a>
              </li>
            </ul>


            <div class="pr-2">

            </div>

            <div class="pr-2">
                <a class="text-white" style="text-decoration: none">Bienvenido: <b> {{ auth()->user()->nombre }}</b></a>
            </div>

            <div class="pr-3">
                <img src="{{ auth()->user()->foto}}" alt="" class="usuario">
           </div>


            <form class="d-flex">

                    <a class="btn btn-danger" href="{{ route('login.destroy') }}" role="button">Cerrar Sesión</a>


            </form>


          </div>
        </div>
      </nav>
@yield('content')

<section id="redapoyo" class="d-flex justify-content-center align-items-center rounded">
    <div class="footer bg-dark text-color:white">
        <div class="row p-5">
            <div class="col-4">
                <h2><strong style="color: #ff0080">Red De Apoyo:</strong> </h2>
                <p style="color: white">Red de apoyo en caso de emergencia: Navega, Libre, Liwa, Suncoenergy,
                    Suncolombia. Recuerde: Número general de emergencias: 123
                    Estamos para servirte cuenta con nosotros
                    WhatsApp profesionales HSE: Chia-Fusagasuga-Bogota</p>

                <a href="https://wa.me/573118076877" data-bs-toggle="tooltip" data-placement="top" title="Chía" class="btn btn-success"
                    target="_blank"> <i class="bi bi-whatsapp"></i></a>
                <a href="https://wa.me/573016373640" data-bs-toggle="tooltip" data-placement="top" title="Chía"
                    class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                <a href="https://wa.me/57{{ env('FUSA_WHASTAPP') }}"
                data-bs-toggle="tooltip" data-placement="top" title="Fusagasugá"
                    class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                <a href="https://wa.me/57{{ env('BOGOTA_WHASTAPP') }}"
                data-bs-toggle="tooltip" data-placement="top" title="Bogotá"
                    class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                <p></p>
                <button type="button" class="btn btn-outline-light">
                    Chía - Fusagasugá - Bogotá
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

</body>
