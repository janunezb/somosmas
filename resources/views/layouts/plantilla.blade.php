
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/72557239af.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">



</head>
<body>






    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('inicio.index')}}"><strong style="color: #ff0080">Somos </strong>Más</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tu SGSST
                  </a>
                  <ul class="dropdown-menu bg" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" style="" href="#induccion">Programa De Formacion</a></li>
                    <li><a class="dropdown-item" style="" href="#medicina">Medicina Preventiva</a></li>
                    <li><a class="dropdown-item" style="" href="#seguridadindustrial">Seguridad Industrial</a></li>
                    <li><a class="dropdown-item" style="" href="#seguridadvial">Seguridad Vial</a></li>
                    <li><a class="dropdown-item" style="" href="{{route('inicio.actividad')}}">Actividad Del Mes</a></li>
                    <li><a class="dropdown-item" style="" href="#avance">Avance Del SGSST</a></li>
                    <li><a class="dropdown-item" style="" href="{{route('inicio.portales')}}">Portales SGSST</a></li>

                  </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('inicio.cultura')}}">Cultura</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('inicio.noticia')}}">Noticia destacada</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#redapoyo">Red De Apoyo</a>
              </li>

            </ul>

            <li class="mx-8">
                <p class="text-white">Bienvenido <b> {{auth()->user()->name }}</b></p>
            </li>



              <form class="d-flex">
                <li class="">
                    <a class="btn btn-danger" href="{{route('login.destroy')}}" role="button">Cerrar Sesión</a>
                </li>

              </form>
          </div>

          <a href="https://api.whatsapp.com/send?phone=573245522551" class="bt-wsp" target="_blank">
            <i class="bi bi-whatsapp"></i>
          </a>


        </div>
      </nav>

      <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
      </script>

</body>
@yield('content')
