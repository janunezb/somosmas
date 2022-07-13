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
            <h4>Etapas 20 a la 22 del SGSST</h4>
            <p>
                <a href="#etapa20" class="btn"><i class="bi bi-check-circle p-2"></i>20.Plan de prevención, preparación y respuesta ante emergencias.</a>
                <br>
                <a href="#etapa21" class="btn"><i class="bi bi-check-circle p-2"></i>21.Gestión frente al desempeño del SGSST.</a>
                <br>
                <a href="#etapa22" class="btn"><i class="bi bi-check-circle p-2"></i>22.Acciones preventivas y correctivas del SGSST.</a>
                <br>
            </p>
        </div>
    </section>

      <div class="cuadrado">
          <div class="row">
              <div class="col-12 fs-2">
                  <P></P>
                Fases del sistema de gestión: Plan de prevención, preparación y respuesta ante emergencias.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Plan de emergencia
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Registros de simulacros.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        9. Procedimiento de rescate en poste.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        13. Acta de conformación de la brigada.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Análisis de vulnerabilidad del plan.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        6. Guía de señalización de las sedes.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        10. Contacto con los administradores de la energía de la zona en caso de requerir apoyo.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        14. Registro de formaciones brigadistas.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        7. Medevac.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        11. PON en caso de accidente Vial.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        15. Registros de formaciones PON Viales.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Formato de registro de simulacro.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        8. Matriz de recursos de emergencia:Botiquines, extintores, camillas.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        12. Registro de formaciones plan de emergencia.
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
                    Fases del sistema de gestión: Acciones preventivas y correctivas del SGSST.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Procedimiento de mejora continua seguimiento y medición.
                    </span>
                    </button>
                    <p></p>
                 </div>
                 <div class="col-3">
                    <button class="butoon gordo"><span>
                        <i class="fa-solid fa-rocket"></i>

                        2. Matriz planes de acción: AT, comportamiento indicadores, auditorias,reporte actos y condiciones inseguras, revision gerencial.
                        <br>
                    </span>
                    </button>
                    <p></p>
                 </div>
                 <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Informes de la ARL
                    </span>
                    </button>
                    <p></p>
                 </div>
            </div>
        </section>



        <section id="" class="container d-flex justify-content">
            <div class="col-6">
                <h4>Etapas 20 a la 22 del SGSST</h4>
                <p>
                <a href="#etapa20" class="btn"><i class="bi bi-check-circle p-2"></i>20.Plan de prevención, preparación y respuesta ante emergencias.</a>
                <br>
                <a href="#etapa21" class="btn"><i class="bi bi-check-circle p-2"></i>21.Gestión frente al desempeño del SGSST.</a>
                <br>
                <a href="#etapa22" class="btn"><i class="bi bi-check-circle p-2"></i>22.Acciones preventivas y correctivas del SGSST.</a>
                <br>
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
