<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Formacion;

class ModalFormationEdit extends Component
{
    public $id;
    public $registro ;
    public $orden ;
    public function __construct($id)
    {
        $this->id = $id;
    }

   
    public function render()
    {
        $this->registro = Formacion::find($this->id);
        $this->orden = Formacion::where('estado','1')
        ->orderBy('orden', 'asc')
        ->get();
        return view('components.modal-formation-edit');
    }
}
