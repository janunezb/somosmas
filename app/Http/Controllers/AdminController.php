<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{



    public function index() {
        return view ('admin.dashboard');
    }
    public function users() {

        

        return view ('admin.users');
    }

    public function navega() {

        return view ('admin.navega');
    }

    public function libre() {

        return view ('admin.libre');
    }

    public function sunco() {

        return view ('admin.sunco');
    }
}
