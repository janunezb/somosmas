<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;
class NewController extends Controller
{

    public function index()
    {
        return view('admin.news.index');
    }


    public function create()
    {
        return view('admin.news.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit(Noticia $news)
    {
        return view('admin.news.edit',compact('news'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
