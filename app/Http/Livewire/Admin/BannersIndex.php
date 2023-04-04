<?php

namespace App\Http\Livewire\Admin;

use App\Models\Banner;
use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Http\Request;



class BannersIndex extends Component
{
    use WithFileUploads;
    // public $imagenes = [];
    public $imagen;
    public $banner;
    public $estado = 1;
    public $nombre ;
    public $nombres =[];
    public $adjunto ;
    protected $listeners = ['update','deshabilitar'];
    protected $rules = [
    
        'nombre' => 'required',
        'imagen' => 'required|max:2048|image',
        'adjunto' => '',
    ];
    public function render()
    {
        $banners=Banner::where('estado',$this->estado)
        ->get();
        return view('livewire.admin.banners-index', compact('banners'));
    }
   
    public function create()
    {
        $this->validate();
        $image = $this->imagen;
        $avatarName = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath())->encode('jpg', 65)
            ->fit(1920, 400, function ($c) {
                $c->aspectRatio();
                $c->upsize();
        });
        $img->stream();
        Banner::create([
            'ruta' =>$avatarName,
            'estado' => $this->estado,
            'nombre' => $this->nombre,
            'adjunto' => $this->adjunto,
        ]);
        Storage::disk('local')->put('public/images/banners' . '/' . $avatarName, $img, 'public');
        return view('livewire.admin.banners-index');
    }
    public function deshabilitar(Banner $banner)
    {
        if ($banner->estado == 1  ){
            $banner->update(['estado' => '0']);
        }
        else{
            $banner->update(['estado' => '1']);
        }
    }
}
