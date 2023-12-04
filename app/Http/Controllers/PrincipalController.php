<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('pagina_principal.index');
    }
    public function index_usuarios()
    {
        return view('pagina_principal.index_usuarios');
    }
    public function catalogo()
    {
        return view('pagina_principal.catalogo');
    }
    public function nosotros()
    {
        return view('pagina_principal.nosotros');
    }
    public function contactos()
    {
        return view('pagina_principal.contactos');
    }
}
