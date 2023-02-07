<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{



    public function index() {

        $usuarios  = User::get();

        return view ('admin.dashboard',compact('usuarios'));
    }
    public function users() {

        $usuarios  = User::get();

        return view ('admin.users',compact('usuarios'));
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
