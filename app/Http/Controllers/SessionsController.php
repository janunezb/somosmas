<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request){

        if($user = User::where('documento', $request->documento)->first()){

            if ($user->password === sha1($request->password)) {
                Auth::login($user);
                return redirect()->to('inicio');
            }else{
                return back()->withErrors(['message' => 'Por favor verifica: Contraseña no coincide con tu usuario ']);
            }
        }else{
            return back()->withErrors(['message' => 'Por favor verifica: Cédula no existe ']);
        }
        
    }
       
        

   


    public function destroy()
    {
        auth()->logout();

        return redirect()->to('login');
    }

    
}
 