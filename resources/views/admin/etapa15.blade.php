<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal Liwa</title>

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
            <h4>Etapas 15 a la 19 del SGSST</h4>
            <p>
                <a href="#etapa15" class="btn"><i class="bi bi-check-circle p-2"></i>15.Condiciones de salud en el trabajo.</a>
                <br>
                <a href="#etapa16" class="btn"><i class="bi bi-check-circle p-2"></i>16.Gestion de accidentes, incidentes y enfermedades laborales.</a>
                <br>
                <a href="#etapa17" class="btn"><i class="bi bi-check-circle p-2"></i>17.Mecanismos de vigilancia condiciones de salud.</a>
                <br>
                <a href="#etapa18" class="btn"><i class="bi bi-check-circle p-2"></i>18.Id de peligros, evaluacion y valoracion de riesgos.</a>
                <br>
                <a href="#etapa19" class="btn"><i class="bi bi-check-circle p-2"></i>19.Medidas de intervencion de peligros y riesgos.</a>

            </p>
        </div>
    </section>

      <div class="cuadrado">
          <div class="row">
              <div class="col-12 fs-2">
                  <P></P>
                Fases del sistema de gestion: Condiciones de salud en el trabajo.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Procedimiento de comunicaciones del SGSST
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Programa de vigilancia riesgo biomecanico.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        9. Matriz de recomendaciones y restricciones.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        13. Plan de gestion integral de residuos.
                    </span>
                    </button>
                    <p></p>

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Ficha fisica de reporte de actos y condiciones inseguras.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        6. Profesiograma: Tener en cuenta alturas y conduccion.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        10. Modelo carta entrega de recomendaciones o restricciones.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Tabla de gestion de reportes de actos y condiciones inseguras.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        7. Registro envio profesiograma a la IPS.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        11. Documento de custodia historias clinicas.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Programa de promocion, prevencion y estilos de vida saludable.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        8. Procedimiento examenes medicos IPS.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        12. Registro de puntos de dispocision de basuras y puntos de hidratacion.
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
                    Fases del sistema de gestion: Gestion de accidentes, incidentes y enfermedades laborales.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Procedimiento de investigacion incidentes y AT.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Procedimiento de investigacion de ENF.Laborales
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        9. Procedimiento reintegro laboral.
                    </span>
                    </button>
                    <p></p>
                 </div>
                 <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Formato de investigacion de incidentes y AT.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        6. Formato de investigacion de ENF.Laborales
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        10. Lecciones aprendidas.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        7. Matriz de planes de accion ENF.Laborales
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        11. Registro divulgacion lecciones A.
                    </span>
                    </button>
                    <p></p>
                 </div>
                 <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Reportes de AT a la ARL.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        8. Reportes de ENF. Laborales a la ARL.
                    </span>
                    </button>
                    <p></p>
                 </div>
        </section>

        <div class="cuadrado">
            <div class="row">
                <div class="col-12 fs-2">
                    <p></p>
                    Fases del sistema de gestion: Mecanismos de vigilancia condiciones de salud.
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
                    <button class="butoon gordo"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Tabla de indicadores SGSST: Frecuencia, severidad, proporcion, prevalencia, incidencia y A. general.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Tabla de medicion de indicadores viales.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Base de ausentismo.
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
                    Fases del sistema de gestion: Id de peligros, evaluacion y valoracion de riesgos.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Procedimiento identificacion de peligros y valoracion de riesgos.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Plan de accion encuesta de riesgo vial
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Encuesta de aplicacion riesgo psicosocial.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        6. Participacion de los colaboradores:Reporte de peligros y riesgos.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Plan de accion encuesta riesgo psicosocial.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        7. Tabla de analisis sustancias quimicas cancerigenas.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Encuesta de riesgo Vial.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        8. Gestion mediciones Higienicas: Segun sea luminiscencia, ruido.
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
                    Fases del sistema de gestion: Medidas de intervencion de peligros y riesgos.
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
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Programa de prevencion de caidas.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Matriz de recursos para emergencias:Botiquines, extintores, entre otros.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        9. Formato de inspeccion camillas.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        13. Gestion quimicos:Rotulacion de quimicos SGA.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        17. Programa prevencion riesgo electrico.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        21. Evidencias formato preoperacional telecomunicaciones.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        25. Registros preoperacionales motos.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        29. Registros señalizacion.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        33. Semaforo mensual de la seguridad.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        37. Campaña uso seguro del celular.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        41. Plan de gestion integral de residuos
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        45. Fichas tecnicas de elementos de proteccion personal.
                    </span>
                    </button>
                    <p></p>

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. PVE prevencion riesgo biomecanico.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        6. Formato de inspeccion general.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        10. Formato de inspeccion camillas.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        14. Gestion quimicos: Hojas de seguridad.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        18. Programa prevencion alcohol y drogas.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        22. Preoperacional vehicular.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        26. Matriz de seguimiento vehiculos incluir mantenimiento.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        30. Informes de riesgos en la Via
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        34. Registros semaforo de la seguridad.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        38. Registros campaña uso seguro del celular.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        42. Normas basicas de seguridad en bodega
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        46. Registros de entrega de elementos de proteccion personal.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Programa de prevencion riesgo psicosocial.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        7. Formato de inspeccion extintores.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        11. Programa de prevencion riesgo quimico.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        15. Seguimiento actos y condiciones inseguras reportados.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        19. Protocolo de bioseguridad C19.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        23. Registros preoperacionales vehiculares.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        27. Matriz de seguimiento motos incluir mantenimiento.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        31. Registros de entrega de informes riesgos en la Via
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        35. Planes de accion semaforo de la seguridad
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        39. Base de datos vacuna C19.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        43. Registro de formacion normas de seguridad en bodega: almacenista
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        47. Capacitacion elementos de proteccion personal.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Programa de inspecciones con participacion del Copasst.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        8. Formato de inspeccion botiquines.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        12. Gestion quimicos señales:Matriz de compatiblidad
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        16. Hoja de vida equipos de alturas,incluir mantenimiento.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        20. F. preoperacional trabajos rutinarios telecomunicaciones.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        24. Preoperacional motos.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        28. Guia de señalizacion sedes.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        32. Infraestructura segura Vial
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        36. Guia demarcacion durante trabajos.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        40. Procedimiento de instalacion de fibra.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        44. Matriz de elementos de proteccion personal
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        48. Registro de inspecciones buen uso de EPP.
                    </span>
                    </button>
                    <p></p>
                </div>
            </div>
        </section>


        <section id="" class="container d-flex justify-content">
            <div class="col-6">
                <h4>Etapas 15 a la 19 del SGSST</h4>
                <p>
                    <a href="#etapa15" class="btn"><i class="bi bi-check-circle p-2"></i>15.Condiciones de salud en el trabajo.</a>
                    <br>
                    <a href="#etapa16" class="btn"><i class="bi bi-check-circle p-2"></i>16.Gestion de accidentes, incidentes y enfermedades laborales.</a>
                    <br>
                    <a href="#etapa17" class="btn"><i class="bi bi-check-circle p-2"></i>17.Mecanismos de vigilancia condiciones de salud.</a>
                    <br>
                    <a href="#etapa18" class="btn"><i class="bi bi-check-circle p-2"></i>18.Id de peligros, evaluacion y valoracion de riesgos.</a>
                    <br>
                    <a href="#etapa19" class="btn"><i class="bi bi-check-circle p-2"></i>19.Medidas de intervencion de peligros y riesgos.</a>

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
