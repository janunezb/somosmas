<?php

namespace App\Http\Controllers;


use App\Models\Content;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{

    public function index(){




        $contenido = Content::where('estado', '1')->where('categoria_id', '1')->orderBy('orden', 'asc')->get();

        $noticia = Content::where('estado', '1')->where('categoria_id', '4')->orderBy('created_at', 'desc')->Limit('1')->get();

        $card = Content::where('estado', '1')->where('categoria_id', '3')->where('nombre', 'card')->where('orden', '1')
        ->get();

        $formacion = Content::where('estado', '1')->where('categoria_id', '3')->orderBy('created_at', 'desc')
        ->get();


        return view ('inicio.index', compact('contenido', 'noticia', 'card', 'formacion'));
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

    public function noticia(){

        //$not = Content::paginate();
        $not = Content::where('estado', '1')->where('categoria_id', '2')->orderBy('id', 'desc')->Paginate(2)
        ;

        return view('inicio.noticia', compact('not'));
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
