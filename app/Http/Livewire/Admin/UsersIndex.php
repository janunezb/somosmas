<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log;

class UsersIndex extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = "bootstrap";
    public $base;

    

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()

    {
       

        $users = User::where('nombre','LIKE','%'.$this->search.'%')
        ->orwhere('documento','LIKE','%'.$this->search.'%')
        ->paginate(20);
        
        return view('livewire.admin.users-index', compact('users'));
    }
   

}
