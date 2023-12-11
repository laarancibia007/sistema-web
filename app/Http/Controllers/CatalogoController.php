<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CatalogoController extends Controller
{
    public function index()
    {
        $listaprod = Producto::all();
        return view('catalogo.index', array('listaprod'=>$listaprod));
    }
}
