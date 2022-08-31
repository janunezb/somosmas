@extends('layouts.etapalibre')

@section('title', 'Portal Libre')

@section('content')

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
                    "Desde la dirección de Liwa estamos comprometidos con la implementación, desarrollo, mejora continua y cumplimiento legal del sistema de gestión de Seguridad y salud en el trabajo como en nuestra gestión ambiental a través de la asignación de los diferentes recursos necesarios para tal fin; identificando y gestionando los diferentes peligros y riesgos a los que se encuentran expuestos nuestros colaboradores como los terceros al igual que los diferentes aspectos ambientales que se puedan generar durante el desarrollo de nuestras diferentes actividades; vigilando no solo el cumplimiento legal de nuestros procesos sino el de los terceros que hagan parte del desarrollo de nuestras actividades"
                </p>

                <h4>Objetivos del SGSST</h4>
                    <p>
                        <i class="bi bi-check-circle p-2"></i> Identificar, evaluar y controlar los agentes y factores de riesgos derivados de condiciones peligrosas y actos sub estándares presentes en el medio de trabajo, que puedan causar accidentes o alteraciones en la salud de los colaboradores y socializarlos.
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
                        <i class="bi bi-check-circle p-2"></i>  Desarrollar, implementar y hacer seguimiento a campañas de estilos de vida saludables generando la cultura del auto-cuidado.
                    </p>
            </div>
            <div class="col-6">
                <img src="{{asset('images/logos/libre.png')}}" style="object-fit: cover" alt="" height="40%" width="60%">
            </div>

            <div class="col-6">
                <h4>Etapas 1 a la 4 del SGSST</h4>
                <p>
                    <a href="#etapa1" class="btn"><i class="bi bi-check-circle p-2"></i>1.Recursos humanos, financieros, técnicos entre otros.</a>
                    <br>
                    <a href="#etapa2" class="btn"><i class="bi bi-check-circle p-2"></i>2.Programa de formación SGSST, medio ambiente y seguridad Vial.</a>
                    <br>
                    <a href="#etapa3" class="btn"><i class="bi bi-check-circle p-2"></i>3.Política SGSST revisada por el representante legal.</a>
                    <br>
                    <a href="#etapa4" class="btn"><i class="bi bi-check-circle p-2"></i>4.Definición de objetivos: SGSST, seguridad vial y medio ambiente.</a>
                </p>
            </div>
        </div>
      </section>

      <div class="cuadrado">
          <div class="row">
              <div class="col-12 fs-2">
                Fases del sistema de gestión: Recursos humanos, financieros, técnicos, entre otros.
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
                        1. Formato actas del SGSST.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Soportes del profesional SGSST:Hv, licencia,C50, horas, coord. alturas.
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
                        13. Registro de actividades de alto riesgo en las MIPER sí aplica.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        17. Copasst programación de inspecciones.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        21. Actas de reuniones trimestrales comité de convivencia.
                    </span>
                    </button>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Formato registros de asistencia en físico del SGSST.
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
                        10. Documento asignación de recursos para el SGSST por representante legal.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        14. Votaciones de conformación del Copasst.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        18. Acta de conformación del comité de seguridad Vial.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        22. Informes a la gerencia comité de convivencia.
                    </span>
                    </button>
                    <p></p>
                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Formato registros de formación en físico del SGSST.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        7. Divulgación, funciones y responsabilidades dentro del SGSST.
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
                        19. Actas de reuniones trimestrales comité de seguridad vial.
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
                        8. Documento procedimiento de selección de conductores.
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
                        16. Copasst formaciones:Inv.de accidentes,inspecciones, políticas, auditoria.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        20. Acta de conformación del comité de convivencia.
                    </span>
                    </button>
                    <p></p>
                </div>
            </div>
      </section>

      <div class="cuadrado">
        <div class="row">
            <div class="col-12 fs-2">
                Fases del sistema de gestión: Programa de formación SGSST, medio ambiente y seguridad Vial.
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
                        1. Programa de formación: Sgsst, seguridad vial y ambiente.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Matriz de seguimiento formación en avanzado en alturas o re-entrenamiento vigentes.
                    </span>
                    <p></p>

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Formación teórica a conductores.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        6. Matriz de seguimiento inducciones y re-inducciones.
                        </span>
                    </button>
                    <p></p>


                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Formación practica a conductores.
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
                        4. Formación riesgo eléctrico telecomunicaciones.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        8. Matriz de seguimiento formación a conductores.
                    </span>
                    </button>

                </div>
            </div>
        </section>

        <div class="cuadrado">
            <div class="row">
                <div class="col-12 fs-2">
                    Fases del sistema de gestión: Política SGSST revisada por el representante legal, divulgada y realizada conforme dec 1072 de 2015.
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
                        1. Política revisada y firmada por el representante legal.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        5. Divulgación políticas de seguridad Vial.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno p-2"><span>
                        <i class="fa-solid fa-rocket"></i>
                        9. Divulgación reglamento de higiene y seguridad industrial.
                    </span>
                    </button>
                    <p></p>

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        2. Política divulgada al Copasst.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        6. Elaboración políticas de alcohol y drogas.

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        3. Política divulgada al personal.
                    </span>
                    </button>
                    <p></p>
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        7. Registros divulgación política de alcohol y drogas.

                </div>
                <div class="col-3">
                    <button class="buton uno"><span>
                        <i class="fa-solid fa-rocket"></i>
                        4. Elaboración políticas de seguridad Vial.
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
                    Fases del sistema de gestión: Definición de objetivos: SGSST,seguridad vial y medio ambiente.
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
                        2. Registro de divulgación de objetivos a los trabajadores HSE.
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
                <a href="{{route('admin.libre')}}" class="btn"><img src="{{asset('images/logos/libre.png')}}" alt="" width="120" height="100">Libre SGSST</a>

            </div>

        </section>




@endsection
