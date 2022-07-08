@extends('layouts.nav')

@section('title', 'Somos Más')

@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actividad Del Mes</title>
</head>
<body>


        <section id="actividad" class="d-flex justify-content-center  p-3">
             <div class="row">
         <div class="col-md-6 align-items-center offset-3">
          <h2 class="titulo">Actividad Del Mes</h2>
      </div>
      <div class="col-12">
            <p class="texto">Vota por los compañeros que te representaran en el Copasst y en el comité de convivencia; colaboradores Navega y Suncoenergy</p>

      </div>
      <div class="row">
      <div class="col-4 offset-2">
        <div class="card" style="width:;">
          <img src="{{ asset('images/nm.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title ">Tus Representantes</h3>
            <p class="card-text"> Selecciona a los compañeros que quieres que te representen en el Copasst y en el comité de convivencia; recuerda que el copasst es el comité que
                apoya los temas de seguridad y salud en el trabajo en tu empresa y el de convivencia prevenir el riesgo psicosocial.
            </p>
            <p>Tiempo estimado 5 minutos.</p>

            <a href="https://forms.gle/69qYRLGjVD9cTrNb9" class="btn btn-outline-dark" target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width:;">
          <img src="{{ asset('images/nm1.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Tus Representantes</h3>
            <p class="card-text"> Selecciona a los compañeros que quieres que te representen en el Copasst y en el comité de convivencia; recuerda que el copasst es el comité que
                apoya los temas de seguridad y salud en el trabajo en tu empresa y el de convivencia prevenir el riesgo psicosocial.
            </p>
            <p>Tiempo estimado 5 minutos.</p>
            <a href="https://forms.gle/nVyxfLoVoxeaxMwX7" class="btn btn-outline-dark" target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
          </div>
      </div>
        </div>
      </div>
    </div>
</section>
    </div>
</div>






    <section id="redapoyo" class="d-flex justify-content-center align-items-center rounded">
        <div class="footer bg-dark text-color:white">
            <div class="row p-5">
            <div class="col-4">
                    <h2><strong style="color: #ff0080">Red De Apoyo:</strong> </h2>
                    <p style="color: white">Red de apoyo en caso de emergencia: Navega, Libre, Liwa, Suncoenergy, Suncolombia. Recuerde: Número general de emergencias: 123
                        Estamos para servirte cuenta con nosotros
                        WhatsApp profesionales HSE: Chia-Fusagasuga-Bogota</p>

                        <a href="https://wa.me/573118076877/?text=Soy%20tu%20apoyo%20en%20Navega" class="btn btn-success" target="_blank"> <i class="bi bi-whatsapp"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=573016373640&text=Soy%20tu%20apoyo%20en%20Libre." class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=573245522551&text=Soy%20tu%20apoyo%20en%20Bogota." class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=573223097701&text=Soy%20tu%20apoyo%20en%20Bogota." class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <p></p>
                        <button type="button" class="btn btn-outline-light" >
                            Chía -Fusagasugá -Bogotá
                        </button>

                </div>
                <div class="col-4">
                    <h5><strong style="color: #ff0080">Direcciones oficinas: Recuerde número general emergencias: 123/ Numero general Cruz Roja: 132 </strong> </h5>
                    <p style="color: white">Oficina Bogotá de la 127: Barrio tierra linda-Calle 127b bis #49-48.
                        Oficina Navega Centro comercial Vivenza Plaza: Cra 10 # 0-49 Sur Local 148 Chía, Cundinamarca.
                        Oficina Libre Centro comercial Escorial Center: Carrera 6 # 07-36 Local 317 Fusagasugá, Cundinamarca.</p>

                        <h5><strong style="color: #ff0080">Clínica más cercanas ARL Sura:</strong></h5>
                        <p style="color: white">Oficina Bogotá de la 127: Cruz roja Norte: Autopista norte con calle 145 / Clínica los Nogales Calle 95-23-61 / Clínica Vip calle 97#23-10 /
                            Oficina Navega Chía: Hospital San Antonio de Chía, carrera 10 No. 8-24 Chía-Tel:5140707.
                            Oficina Libre Fusagasugá: Hospital San Rafael: Diagonal 23 12 - 64 Fusagasugá - Cundinamarca / Clínica Belén Fusagasugá: Calle 17 # 12-27</p>
                </div>
                <div class="col-4">
                    <h5><strong style="color: #ff0080">Línea de reporte de AT (ARL Sura):</strong></h5>
                    <p style="color: white">Oficina Bogotá de la 127: 4055911
                        Oficina Navega Chía : 4055911
                        Oficina Libre Fusagasuga: 4055911</p>
                    <h5><strong style="color: #ff0080">Cuadrantes de la policía. Recuerde número general policía 112.</strong></h5>
                    <p style="color: white">Oficina Bogotá de la 127: Cuadrante 3002005460-3002005460
                            Oficina Navega Chía: Caí Guaymaral 313 3490791 / Cuadrantes: 3017791812 - 3212464768
                            Oficina Libre Fusagasugá: Cuadrante: 3212475311</p>
                    <h5><strong style="color: #ff0080">Bomberos. Recuerde número general bomberos 119.</strong></h5>
                    <p style="color: white">Oficina Bogotá de la 127: Estación de bomberos Caobos: 6144105-6143290-3822500/ Estación de bomberos Cedritos: 6724913
                        Oficina Navega Chía: Bomberos Chía: 8844595-8844587 / 300 1234567
                        Oficina Libre Fusagasugá: 8676736 / 311 5853577</p>
            </div>



        </div>
            </div>

                </div>
    </section>

    </body>





</html>

@endsection
