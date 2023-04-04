<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.banners.banner-index');
    }

    public function update(Request $request,Banner $banner)
    {
        $request->validate([
            'nombre'.$banner->id=>'required',
            'imagen'.$banner->id=>'required|image'
        ]);
        
        $image = $request->file('imagen'.$banner->id);
        $avatarName = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath())->encode('jpg', 65)
            ->fit(1920, 400, function ($c) {
                $c->aspectRatio();
                $c->upsize();
        });
        $request->merge(['ruta'=>$avatarName]);
        $request->merge(['nombre'=>request('nombre'.$banner->id)]);
        $request->merge(['adjunto'=>request('adjunto'.$banner->id)]);
        $img->stream();
        Storage::disk('local')->put('public/images/banners' . '/' . $avatarName, $img, 'public');
        
        
        $banner->update($request->all());
        
        return $request;
        return $banner;
           return redirect()->route('admin.banners.index')->with('info','Los datos han sido actualizados.');
        // return redirect()->route('admin.users.edit',$user)->with('info','Los datos han sido actualizados.');
        //  return view('livewire.admin.banners-index');
    }

}
