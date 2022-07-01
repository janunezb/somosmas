<?php

namespace App\Http\Controllers;



class IndexController extends Controller
{

    public function index(){

        return view ('inicio.index');
    }

    public function cultura(){


        return view('inicio.cultura');

    }


    public function actividad(){
        return view('inicio.actividad');

    }

    public function portales(){
        return view('inicio.portales');

    }


    /*vistas portales */

    public function portalliwa(){
        return view('inicio.portalliwa');

    }



    public function portalsunco(){
        return view('inicio.portalsunco');

    }

    public function portalnavega(){
        return view('inicio.portalnavega');

    }

    public function portallibre(){
        return view('inicio.portallibre');

    }

    /*Vistas Liwa*/

    public function etapa5liwa(){
        return view ('admin.etapa5');
    }
    public function etapa10liwa(){
        return view ('admin.etapa10');
    }
    public function etapa15liwa(){
        return view ('admin.etapa15');
    }
    public function etapa20liwa(){
        return view ('admin.etapa20');
    }

     /*vistas portal navega */

     public function etapa5navega(){
        return view ('admin.etapa5n');
    }
    public function etapa10navega(){
        return view ('admin.etapa10n');
    }
    public function etapa15navega(){
        return view ('admin.etapa15n');
    }
    public function etapa20navega(){
        return view ('admin.etapa20n');
    }

    /*vistas portal Libre */

    public function etapa5libre(){
        return view ('admin.etapa5l');
    }
    public function etapa10libre(){
        return view ('admin.etapa10l');
    }
    public function etapa15libre(){
        return view ('admin.etapa15l');
    }
    public function etapa20libre(){
        return view ('admin.etapa20l');
    }

    /*vistas portal SuncoEnergy */

    public function etapa5sunco(){
        return view ('admin.etapa5s');
    }
    public function etapa10sunco(){
        return view ('admin.etapa10s');
    }
    public function etapa15sunco(){
        return view ('admin.etapa15s');
    }
    public function etapa20sunco(){
        return view ('admin.etapa20s');
    }


}
