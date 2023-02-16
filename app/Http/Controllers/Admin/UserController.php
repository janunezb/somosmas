<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Spatie\Permission\Models\Role;

 class UserController extends Controller
{

    public function index()
    {
        return view('admin.users');
    }


    public function create()
    {
        return view('admin.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'documento'=>'required|unique:users',
            'nombre'=>'required',
            'fecha_nacimiento'=>'required',
            'fecha_ingreso'=>'required',
            'cargo'=>'required',
            // 'email'=>'required',
            'foto'=>'image'
        ]);

        // $request->input('');
        if(){}
         $nombre_img=$request->input('documento');
         $extension= $request->file('foto')->getClientOriginalExtension();
         $nombre_foto=$nombre_img.'.'.$extension;

         Image::make($request->file('foto'))
         ->resize(1000, null, function ($constraint) {
            $constraint->aspectRatio();
         })
         ->save('images\fotos/'.$nombre_foto);
        //  return $nombre_foto;

        // $user= User::create($request->all());
        // return redirect()->route('admin.users.edit',$user);
    }


    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {
        $roles = Role::all();
        return view ('admin.edit',compact('user','roles'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
