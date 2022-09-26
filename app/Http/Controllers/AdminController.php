<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{



    public function index() {

        return view ('admin.index');
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
