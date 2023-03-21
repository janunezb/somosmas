<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Noticia;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class NewsIndex extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = "bootstrap";

    public $search;
    public $imagenes = [];
    public $titulo,$contenido,$adjunto,$estado;
    protected $rules = [
        'titulo' => 'required',
        'contenido' => 'required',
        'adjunto' => 'required',
        'estado' => 'required|in:1,0',
    ];

    public function submit()
    {
        $this->validate();
        Noticia::create([
            'titulo' => $this->titulo,
            'contenido' => $this->contenido,
            'adjunto' => $this->adjunto,
            'estado' => $this->estado,
        ]);
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $news = Noticia::where('titulo','LIKE','%'.$this->search.'%')
        ->orwhere('contenido','LIKE','%'.$this->search.'%')
        ->paginate(4);
        return view('livewire.admin.news-index',compact('news'));
    }
}
