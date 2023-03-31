<?php

namespace App\Http\Livewire\Admin;

use App\Models\Banner;
use Illuminate\Support\Facades\Log;


use Livewire\Component;

class BannersIndex extends Component
{
    public function render()
    {
        $banners=Banner::where('estado','1')->get();
        
        return view('livewire.admin.banners-index', compact('banners'));
    }
}
