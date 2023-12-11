<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $listaprod = Producto::all();
        return view('productos.index', array('listaprod'=>$listaprod));
    }
    public function crear()
    {
        $listacat = Categoria::all();
        // revisar esta linea
        return view('productos.crear',array('listacat'=>$listacat));
    }
    public function postcrear(Request $r)
    {
        $validate = $r->validate([
            "nombre"=>"required| unique:categorias,nombre|max:50",
            "img"=>"required"
        ]);
        // var_dump($r->all());
        $p = new Producto();
        $p->nombre = $r->nombre;
        $p->img = $r->file("img")->store("img");
        $p->precio = $r->precio;
        $p->stock = $r->stock;
        $p->categoria_id=$r->categoria_id;
        // var_dump($cat);
        $p->save();
        return redirect('/productos');

    }
    public function mod($id)
    {
        $p = Producto::find($id);
        return view('productos.mod', array('p'=>$p));
    }

    public function postmod(Request $r, $id)
    {

        // var_dump($r->all());
        $p = Producto::find($id);
        $p->nombre = $r->nombre;
        if ($r->hasFile('img')) {
            $p->img = $r->file("img")->store("img");
        }
        $p->precio = $r->precio;
        $p->stock = $r->stock;
        $p->categoria_id = $r->categoria_id;
        $p->save();
        return redirect('/productos');

    }
    public function del($id)
    {
        // var_dump($r->all());
        $p = Producto::find($id);
        $p->delete();
        return redirect('/productos');

    }
}
