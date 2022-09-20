<?php

namespace App\Http\Controllers;


use App\Models\Content;
use App\Models\User;
use App\Models\Empresa;

use Carbon\Carbon;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{

    public function index()
    {




        $contenido = Content::where('estado', '1')
            ->where('categoria_id', '1')
            ->orderBy('orden', 'asc')
            ->get();

        $noticia = Content::where('estado', '1')
            ->where('categoria_id', '4')
            ->orderBy('created_at', 'desc')
            ->Limit('1')
            ->get();

        $card = Content::where('estado', '1')
            ->where('categoria_id', '3')
            ->where('nombre', 'card')
            ->where('orden', '1')
            ->get();

        $formacion = Content::where('estado', '1')
            ->where('categoria_id', '3')
            ->orderBy('created_at', 'desc')
            ->get();

        // $empresa = User::join('empresas', 'empresas.id', '=' , 'users.business_id')
        // ->select('empresas.nombre')
        // ->where('empresas.estado', '1')
        // ->get();



        //Fechas

        $now = Carbon::now();
        $currentDate = $now->toDateString();



        $cumple = User::join('empresas', 'empresas.id', '=' , 'users.business_id')
        ->select('users.nombre as nombre' , 'empresas.nombre as empresa', 'users.foto as foto', 'users.cargo as cargo')
        ->where('empresas.estado', '1')
        ->get();

        LOG::alert($cumple);

        $lista = [];
        foreach($cumple as $cmp) {
            $data = [];
            $convert = strtotime($cmp['birthday_date']);
            $formato = date('m-d',$convert);
            $now = date('m-d', time());


            if($formato == $now) {
                $data["nombre"] = $cmp['nombre'];
                $data["foto"] = $cmp['foto'];
                $data["cargo"] = $cmp['cargo'];
                $data["empresa"] = $cmp['empresa'];
                Log::alert('coincidencia');
                array_push($lista, $data);
            }
        }

        LOG::alert($lista);


        return view('inicio.index', compact('contenido', 'noticia', 'card', 'formacion', 'now', 'lista' ,'currentDate'));
    }

    public function cultura()
    {


        return view('inicio.cultura');
    }


    public function actividad()
    {
        return view('inicio.actividad');
    }

    public function portales()
    {

        $portal = Empresa::where('estado', '1')
            ->get();

        return view('inicio.portales', compact(('portal')));
    }

    public function noticia()
    {

        $pag = env('PAGINATION');

        //$not = Content::paginate();
        $not = Content::where('estado', '1')
            ->where('categoria_id', '2')
            ->orderBy('id', 'desc')
            ->Paginate($pag);

        return view('inicio.noticia', compact('not'));
    }



    /*vistas portales */

    public function portalliwa()
    {
        return view('inicio.portalliwa');
    }



    public function portalsunco()
    {
        return view('inicio.portalsunco');
    }

    public function portalnavega()
    {
        return view('inicio.portalnavega');
    }

    public function portallibre()
    {
        return view('inicio.portallibre');
    }

    /*Vistas Liwa*/

    public function etapa5liwa()
    {
        return view('admin.etapa5');
    }
    public function etapa10liwa()
    {
        return view('admin.etapa10');
    }
    public function etapa15liwa()
    {
        return view('admin.etapa15');
    }
    public function etapa20liwa()
    {
        return view('admin.etapa20');
    }

    /*vistas portal navega */

    public function etapa5navega()
    {
        return view('admin.etapa5n');
    }
    public function etapa10navega()
    {
        return view('admin.etapa10n');
    }
    public function etapa15navega()
    {
        return view('admin.etapa15n');
    }
    public function etapa20navega()
    {
        return view('admin.etapa20n');
    }

    /*vistas portal Libre */

    public function etapa5libre()
    {
        return view('admin.etapa5l');
    }
    public function etapa10libre()
    {
        return view('admin.etapa10l');
    }
    public function etapa15libre()
    {
        return view('admin.etapa15l');
    }
    public function etapa20libre()
    {
        return view('admin.etapa20l');
    }

    /*vistas portal SuncoEnergy */

    public function etapa5sunco()
    {
        return view('admin.etapa5s');
    }
    public function etapa10sunco()
    {
        return view('admin.etapa10s');
    }
    public function etapa15sunco()
    {
        return view('admin.etapa15s');
    }
    public function etapa20sunco()
    {
        return view('admin.etapa20s');
    }
}
