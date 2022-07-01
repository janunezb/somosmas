
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal Nageva</title>

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
                <a class="navbar-brand" href="{{route('inicio.portalnavega')}}"> Navega</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{route('inicio.portalnavega')}}">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Etapas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('inicio.etapa5navega')}}">Etapas 5 a la 9</a></li>
                  <li><a class="dropdown-item" href="{{route('inicio.etapa10navega')}}">Etapas 10 a la 14</a></li>
                  <li><a class="dropdown-item" href="{{route('inicio.etapa15navega')}}">Etapas 15 a la 19</a></li>
                  <li><a class="dropdown-item" href="{{route('inicio.etapa20navega')}}">Etapas 20 a la 22</a></li>
                </ul>
              </li>
            </ul>
            <span class="navbar-text">
                Bienvenido:
              </span>
            <form class="d-flex p-2" role="search">
              <button class="btn btn-danger" type="submit">Cerrar Sesión</button>
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
      <section id="poldeseguridad" class="container d-flex justify-content">
        <div class="row">
            <div class="col-6 p-3">
                <h4>Politica de seguridad y salud en el trabajo</h4>
                <p>
                    "Desde la dirección de Navega estamos comprometidos con la implementación, desarrollo, mejora continua y cumplimiento legal del sistema de gestión de Seguridad y salud en el trabajo como en nuestra gestión ambiental a través de la asignación de los diferentes recursos necesarios para tal fin; identificando y gestionando los diferentes peligros y riesgos a los que se encuentran expuestos nuestros colaboradores como los terceros al igual que los diferentes aspectos ambientales que se puedan generar durante el desarrollo de nuestras diferentes actividades;vigilando no solo el cumplimiento legal de nuestros procesos sino el de los terceros que hagan parte del desarrollo de nuestras actividades"
                </p>

                <h4>Objetivos del SGSST</h4>
                    <p>
                        <i class="bi bi-check-circle p-2"></i> Identificar, evaluar y controlar los agentes y factores de riesgos derivados de condiciones peligrosas y actos subestándares presentes en el medio de trabajo, que puedan causar accidentes o alteraciones en la salud de los colaboradores y socializarlos.
                    </p>
                    <p>
                        <i class="bi bi-check-circle p-2"></i> Diseñar, implementar y evaluar el desarrollo del Sistema de Gestión en Seguridad y Salud en el trabajo.
                    </p>
                    <p>
                        <i class="bi bi-check-circle p-2"></i> Desarrollar un plan de capacitación en temas relacionados con el Sistema de Gestión de Seguridad y Salud en el Trabajo.
                    </p>

                    <p>
                        <i class="bi bi-check-circle p-2"></i> Cumplir con los requisitos legales que en materia de seguridad y salud en el trabajo apliquen a la empresa.
                    </p>
                    <p>
                        <i class="bi bi-check-circle p-2"></i>  Desarrollar, implementar y hacer seguimiento a campañas de estilos de vida saludables generando la cultura del autocuidado.
                    </p>
            </div>
            <div class="col-6">
                <img src="{{asset('images/logos/navega.png')}}" alt="">
            </div>

            <div class="col-6">
                <h4>Etapas 1 a la 4 del SGSST</h4>
                <p>
                    <a href="#etapa1" class="btn"><i class="bi bi-check-circle p-2"></i>1.Recursos humanos, financieros, tecnicos entre otros.</a>
                    <br>
                    <a href="#etapa2" class="btn"><i class="bi bi-check-circle p-2"></i>2.Programa de formacion SGSST, medio ambiente y seguridad Vial.</a>
                    <br>
                    <a href="#etapa3" class="btn"><i class="bi bi-check-circle p-2"></i>3.Politica SGSST revisada por el representante legal.</a>
                    <br>
                    <a href="#etapa4" class="btn"><i class="bi bi-check-circle p-2"></i>4.Definicion de objetivos: SGSST,seguridad vial y medio ambiente.</a>
                </p>
            </div>
        </div>
      </section>

      <div class="cuadrado">
          <div class="row">
              <div class="col-12 fs-2">
                Fases del sistema de gestion: Recursos humanos, financieros, tecnicos entre otros.
              </div>
          </div>
      </div>

      <section id="etapa1" class="container d-flex justify-content pt-4">

            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 1 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                    <br>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Formato actas del SGSST
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Soportes del profesional SGSST:Hv,licencia,C50 horas,coord. alturas.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        9. Muestreo de pagos de seguridad social a 10% de los colaboradores.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        13. Registro de actividades de alto riesgo en las MIPER si aplica.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        17. Copasst programacion de inspecciones.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        21. Actas de reuniones trimestrales comite de convivencia.
                    </span>
                    </button>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Formato registros de asistencia en fisico del SGSST.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        6. Funciones y responsabilidades dentro del SGSST
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        10. Documento asignacion de recursos para el SGSST por representante legal.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        14. Votaciones de conformacion del Copasst.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        18. Acta de conformacion del comite de seguridad Vial.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        22. Informes a la gerencia comite de convivencia.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Formato registros de formacion en fisico del SGSST.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        7. Divulgacion funciones y responsabilidades dentro del SGSST.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        11. Matrices de peligros incluyendo las tareas de alto riesgo y C19.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        15. Actas de reuniones del Copasst.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        19. Actas de reuniones trimestrales comite de seguridad vial.
                    </span>
                    </button>

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Acta responsable SGSST, validada por representante legal.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        8. Documento procedimiento de seleccion de conductores.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        12. Acta de representante legal designando recursos para el PESV.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        16. Copasst formaciones:Inv.de accidentes,inspecciones, politicas, auditoria.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        20. Acta de conformacion del comite de convivencia.
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

        <section id="etapa2" class="container d-flex justify-content pt-4">

            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 2 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                    <br>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Programa de formacion: Sgsst, seguridad vial y ambiente.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Matriz de seguimiento formacion en avanzado en alturas o reentrenamiento vigentes.
                    </span>
                    <p></p>

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Formacion teorica a conductores.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        6. Matriz de seguimiento inducciones y reinducciones.
                        </span>
                    </button>
                    <p></p>


                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Formacion practica a conductores.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        7. Matriz de seguimiento curso 50 o 20 Horas: Copasst, profesionales SST.

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Formacion riesgo electrico telecomunicaciones.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        8. Matriz de seguimiento formacion a conductores.
                    </span>
                    </button>

                </div>
            </div>
        </section>

        <div class="cuadrado">
            <div class="row">
                <div class="col-12 fs-2">
                    Fases del sistema de gestion: Politica SGSST revisada por el representante legal, divulgada y realizada conforme dec 1072 de 2015.
                </div>
            </div>
        </div>

        <section id="etapa3" class="container d-flex justify-content pt-4">

            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 3 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                    <br>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Politica revisada y firmada por el representante legal.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Divulgacion politicas de seguridad Vial.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        9. Divulgacion reglamento de higiene y seguridad industrial.
                    </span>
                    </button>
                    <p></p>

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Politica divulgada al Copasst.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        6. Elaboracion politicas de alcohol y drogas.

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Politica divulgada al personal.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        7. Registros divulgacion politica de alcohol y drogas.

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Elaboracion politicas de seguridad Vial.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        8. Reglamento de higiene y seguridad industrial.
                    </span>
                    </button>

                </div>
            </div>
        </section>

        <div class="cuadrado">
            <div class="row">
                <div class="col-12 fs-2">
                    Fases del sistema de gestion: Definicion de objetivos: SGSST,seguridad vial y medio ambiente.
                </div>
            </div>
        </div>

        <section id="etapa4" class="container d-flex justify-content pt-4">

            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 4 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h2>DOCUMENTACIÓN Y EVIDENCIAS</h2>
                    <br>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        1. Tabla de seguimiento objetivos, metas e indicadores: sgsst,ambiente y vial.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Registro de divulgacion de objetivos a los trabajadores HSE.
                    </span>
                    </button>
                    <p></p>
                </div>
            </div>
        </section>
        <section id="" class="container d-flex justify-content">
            <div class="col-6">
                <h4>Etapas 1 a la 4 del SGSST</h4>
                <p>
                    <a href="#etapa1" class="btn"><i class="bi bi-check-circle p-2"></i>1.Recursos humanos, financieros, tecnicos entre otros.</a>
                    <br>
                    <a href="#etapa2" class="btn"><i class="bi bi-check-circle p-2"></i>2.Programa de formacion SGSST, medio ambiente y seguridad Vial.</a>
                    <br>
                    <a href="#etapa3" class="btn"><i class="bi bi-check-circle p-2"></i>3.Politica SGSST revisada por el representante legal.</a>
                    <br>
                    <a href="#etapa4" class="btn"><i class="bi bi-check-circle p-2"></i>4.Definicion de objetivos: SGSST,seguridad vial y medio ambiente.</a>
                </p>
            </div>
        </section>
        <section id="" class="container d-flex justify-content">
            <div class="col-6">
                <a href="{{route('inicio.portalnavega')}}" class="btn"><img src="{{asset('images/logos/navega.png')}}" alt="" width="120" height="100">Navega SGSST</a>

            </div>

        </section>










</body>
</html>
