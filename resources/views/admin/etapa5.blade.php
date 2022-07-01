<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal Liwa </title>

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
                <a class="navbar-brand clase1" href="{{route('admin.index')}}"> Liwa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link clase2" style="color: white" href="{{route('admin.index')}}">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle clase2" style="color: white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Etapas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('admin.etapa5liwa')}}">Etapas 5 a la 9</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.etapa10liwa')}}">Etapas 10 a la 14</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.etapa15liwa')}}">Etapas 15 a la 19</a></li>
                  <li><a class="dropdown-item" href="{{route('admin.etapa20liwa')}}">Etapas 20 a la 22</a></li>
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
                            <h1 style="color: #007aff">Sistema de gestion de seguridad
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
            <h4>Etapas 5 a la 9 del SGSST</h4>
            <p>
                <a href="#etapa5" class="btn"><i class="bi bi-check-circle p-2"></i>5.Evaluacion inicial del SGSST.</a>
                <br>
                <a href="#etapa6" class="btn"><i class="bi bi-check-circle p-2"></i>6.Plan anual de trabajo SGSST.</a>
                <br>
                <a href="#etapa7" class="btn"><i class="bi bi-check-circle p-2"></i>7.Procedimiento de control de documentos y registros</a>
                <br>
                <a href="#etapa8" class="btn"><i class="bi bi-check-circle p-2"></i>8.Rendicion de cuentas de todos los niveles</a>
                <br>
                <a href="#etapa9" class="btn"><i class="bi bi-check-circle p-2"></i>9.Matriz legal cumplimiento normativo HSE</a>

            </p>
        </div>
    </section>

      <div class="cuadrado">
          <div class="row">
              <div class="col-12 fs-2">
                Fases del sistema de gestion: Evalución incial del sistema de gestión, reporte fondo de riesgos laborales.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Evaluacion inicial fondo de riesgos laborales: SGSST
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Encuesta de diagnostico: Seguridad Vial
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Registros participacion reporte de peligros y riesgos.
                    </span>
                    </button>
                    <p></p>
                </div>
            </div>
      </section>

        <div class="cuadrado">
            <div class="row">
                <div class="col-12 fs-2">
                    Fases del sistema de gestion: Programa de formacion SGSST, medio ambiente y seguridad Vial.
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
                    <button class="butoon gordo"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Plan anual de trabajo firmado por HSE y representante legal :Objetivo, meta, recurso, responsable, cronograma.
                    </span>
                    </button>
                    <p></p>
                 </div>
        </section>

        <div class="cuadrado">
            <div class="row">
                <div class="col-12 fs-2">
                    Conservacion de la documentacion: Procedimiento de control de documentos y registros.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Procedimiento control de registros y documentos.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Matriz de seguimiento conductores y vehiculos.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Lista maestra de documentos y registros.
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
                    Fases del sistema de gestion: Rendicion de cuentas de todos los niveles.
                    <p></p>
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Reporte de rendicion de cuentas:Representante legal
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Reporte de rendicion de cuentas: Copasst
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Reporte de rendicion de cuentas:Lideres de zona
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Reporte de rendicion de cuentas: Profesional SST
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Reporte de rendicion de cuentas: Colaboradores
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
                    Fases del sistema de gestion: Matriz legal cumplimiento normativo HSE
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Matriz de seguimiento legal HSE
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Procedimiento de seguimiento legal HSE
                    </span>
                    </button>
                    <p></p>
                </div>
            </div>
        </section>


        <section id="" class="container d-flex justify-content">
            <div class="col-6">
                <h4>Etapas 5 a la 9 del SGSST</h4>
                <p>
                <a href="#etapa5" class="btn"><i class="bi bi-check-circle p-2"></i>5.Evaluacion inicial del SGSST.</a>
                <br>
                <a href="#etapa6" class="btn"><i class="bi bi-check-circle p-2"></i>6.Plan anual de trabajo SGSST.</a>
                <br>
                <a href="#etapa7" class="btn"><i class="bi bi-check-circle p-2"></i>7.Procedimiento de control de documentos y registros</a>
                <br>
                <a href="#etapa8" class="btn"><i class="bi bi-check-circle p-2"></i>8.Rendicion de cuentas de todos los niveles</a>
                <br>
                <a href="#etapa9" class="btn"><i class="bi bi-check-circle p-2"></i>9.Matriz legal cumplimiento normativo HSE</a>
                </p>
            </div>
        </section>
        <section id="" class="container d-flex justify-content">
            <div class="col-6">
                <a href="{{route('admin.index')}}" class="btn"><img src="{{asset('images/iconoliwa.png')}}" alt="" width="120" height="100">Liwa SGSST</a>

            </div>

        </section>










</body>
</html>
