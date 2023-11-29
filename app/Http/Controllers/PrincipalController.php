<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('principal.index');
    }
    public function index_usuarios()
    {
        return view('principal.index_usuarios');
    }
    public function catalogo()
    {
        return view('principal.catalogo');
    }
    public function nosotros()
    {
        return view('principal.nosotros');
    }
    public function contactos()
    {
        return view('principal.contactos');
    }
}
