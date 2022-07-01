<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function create() {
        return view ('auth.login');
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
