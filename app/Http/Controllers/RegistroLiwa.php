<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrosliwa;

class RegistroLiwa extends Controller
{
    public function create() {
        return view ('inicio.liwa');
    }

   public function store() {
        if(auth()->attempt(request(['name', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'La cedula no existe.',
            ]);
        }

        return redirect()->to('inicio');
   }

   public function destroy(){
       auth()->logout();

       return redirect()->to('login');
   }


}
