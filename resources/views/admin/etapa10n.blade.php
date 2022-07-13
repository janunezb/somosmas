<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal Navega</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/72557239af.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container-fluid">
                <a class="navbar-brand clase1" href="{{route('admin.navega')}}"> Navega</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link clase2" style="color: white" href="{{route('admin.navega')}}">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle clase2" style="color: white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Etapas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('admin.etapa5navega')}}">Etapas 5 a la 9</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.etapa10navega')}}">Etapas 10 a la 14</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.etapa15navega')}}">Etapas 15 a la 19</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.etapa20navega')}}">Etapas 20 a la 22</a></li>
                </ul>
              </li>
            </ul>
            <li class="mx-8">
                <a class="textob" href="{{route ('inicio.portales')}}"><i class="bi bi-house"></i> Regresar</a>

            </li>
            <li class="mx-8">
                <p class="text-white"></p>
            </li>
            <li class="mx-8">
                <p class="text-white">Bienvenido <b> {{auth()->user()->name }}</b></p>
            </li>
            <form class="d-flex p-2" role="search">
                <a class="btn btn-warning" href="{{route('login.destroy')}}" role="button">Cerrar Sesión</a>
            </form>
          </div>
        </div>
      </nav>


      <div  style="background-color: rgb(201, 201, 201)">
        <main class="container d-flex p-5">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-8">
                            <h1 style="color: #007aff">Sistema de gestión de seguridad
                                y salud en el trabajo.</h1>
                            <div style="">
                                <p class="nuevaa h3">
                                    Desarrollamos nuestras actividades
                                    pensando en el bienestar de las personas.</p>
                            </div>
                            <br>
                            <a href="#poldeseguridad" class="btn btn-outline-danger">Comencemos</a>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <section id="" class="container d-flex justify-content pt-5">
        <div class="col-6">
            <h4>Etapas 10 a la 14 del SGSST</h4>
            <p>
                <a href="#etapa10" class="btn"><i class="bi bi-check-circle p-2"></i>10.Gestión de la comunicación del SGSST.</a>
                <br>
                <a href="#etapa11" class="btn"><i class="bi bi-check-circle p-2"></i>11.Procedimiento de compras con criterios HSE.</a>
                <br>
                <a href="#etapa12" class="btn"><i class="bi bi-check-circle p-2"></i>12.Procedimiento de selección, seguimiento contratistas criterios HSE.</a>
                <br>
                <a href="#etapa13" class="btn"><i class="bi bi-check-circle p-2"></i>13.Seguridad de los visitantes en las sedes.</a>
                <br>
                <a href="#etapa14" class="btn"><i class="bi bi-check-circle p-2"></i>14.Gestión del cambio procedimiento y registros</a>

            </p>
        </div>
    </section>

      <div class="cuadrado">
          <div class="row">
              <div class="col-12 fs-2">
                  <P></P>
                Fases del sistema de gestión: Gestión de la comunicación del SGSST.
                <P></P>
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Procedimiento de comunicaciones del SGSST
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Ficha física de reporte de actos y condiciones inseguras.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Tabla de gestión de reportes de actos y condiciones inseguras.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Registros de comunicación con administradores de la energía.
                    </span>
                    </button>
                    <p></p>
                </div>
            </div>
      </section>

        <div class="cuadrado">
            <div class="row">
                <div class="col-12 fs-2">
                    <P></P>
                    Fases del sistema de gestión: Procedimiento de compras con criterios HSE.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Procedimiento de compras con criterios de HSE.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Formación al encargado de compras criterios de compra HSE.
                    </span>
                    </button>
                    <p></p>
                 </div>
                 <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Formato de evaluación de proveedores criterios HSE.
                    </span>
                    </button>
                    <p></p>
                 </div>
                 <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Registros entregados por los proveedores.
                    </span>
                    </button>
                    <p></p>
                 </div>
                 <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Listado de proveedores admitidos.
                    </span>
                    </button>
                    <p></p>
                 </div>
        </section>

        <div class="cuadrado">
            <div class="row">
                <div class="col-12 fs-2">
                    Fases del sistema de gestión: Procedimiento de selección y seguimiento contratistas criterios HSE.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Procedimiento de selección y evaluación HSE contratistas.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Manual de contratistas.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Matriz de seguimiento conductores y vehículos.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        6. Registro de envió del manual a los contratistas.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Registros HSE entregados por los contratistas.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Listado de contratistas admitidos.
                    </span>
                    </button>
                    <p></p>
                </div>

            </div>
        </section>

        <div class="cuadrado">
            <div class="row">
                <div class="col-12 fs-2">
                    <p></p>
                    Fases del sistema de gestión: Seguridad de los visitantes en las sedes.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Folleto de visitantes a las sedes.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Registro de entrega del folleto a los visitantes.
                    </span>
                    </button>
                    <p></p>
                </div>
            </div>
        </section>

        <div class="cuadrado">
            <div class="row">
                <div class="col-12 fs-2">
                    <p></p>
                    Fases del sistema de gestión: Gestión del cambio procedimiento y registros.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Procedimiento de gestión del cambio.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Formato de registro de gestión del cambio.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Evidencias de gestiones del cambio.
                    </span>
                    </button>
                    <p></p>
                </div>
            </div>
        </section>


        <section id="" class="container d-flex justify-content">
            <div class="col-6">
                <h4>Etapas 10 a la 14 del SGSST</h4>
                <p>
                    <a href="#etapa10" class="btn"><i class="bi bi-check-circle p-2"></i>10.Gestión de la comunicación del SGSST.</a>
                    <br>
                    <a href="#etapa11" class="btn"><i class="bi bi-check-circle p-2"></i>11.Procedimiento de compras con criterios HSE.</a>
                    <br>
                    <a href="#etapa12" class="btn"><i class="bi bi-check-circle p-2"></i>12.Procedimiento de selección, seguimiento contratistas criterios HSE.</a>
                    <br>
                    <a href="#etapa13" class="btn"><i class="bi bi-check-circle p-2"></i>13.Seguridad de los visitantes en las sedes.</a>
                    <br>
                    <a href="#etapa14" class="btn"><i class="bi bi-check-circle p-2"></i>14.Gestión del cambio procedimiento y registros</a>
                </p>
            </div>
        </section>
        <section id="" class="container d-flex justify-content">
            <div class="col-6">
                <a href="{{route('admin.navega')}}" class="btn"><img src="{{asset('images/logos/navega.png')}}" alt="" width="120" height="100">Navega SGSST</a>

            </div>

        </section>










</body>
</html>
