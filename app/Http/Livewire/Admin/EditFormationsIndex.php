<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Formacion;
use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class EditFormationsIndex extends Component
{
    use WithFileUploads;
    public $imagen;
    public $form;
    public $orden,$cuerpo,$titulo,$adjunto;
    protected $rules = [
        'form.orden' => 'required',
        'form.titulo' => 'required',
        'form.cuerpo' => 'required',
        'form.imagen' => 'required',
        'form.adjunto' => '',
    ];
    public function mount(Formacion $form)
    {
        $this->form = $form;
        $this->orden = Formacion::where('estado',1)
        ->orderBy('orden', 'asc')
        ->get();
    }
    public function render()
    {
        return view('livewire.admin.edit-formations-index');
    }
    public function update()
    {
        $this->validate();
        if($this->imagen){
            Log::info('dentro imagen');
            $image =$this->imagen;
            $avatarName = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)
                ->fit(800,533, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
                $img->stream();
                Storage::disk('local')->put('public/images/formaciones' . '/' . $avatarName, $img, 'public');
        }
        
        $this->form->save();
        $this->emit('render');
        
        $this->dispatchBrowserEvent('close-modal');
        $this->emitTo('admin.formations-index','render');
        $this->reset(['imagen','titulo','adjunto','cuerpo']);
        return view('livewire.admin.banners-index');
    }
}
