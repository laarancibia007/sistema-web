<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function createForm(Request $request)
    {
        return view('contacto');
    }
    // Store Contact Form data
    public function Contacto(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'celular' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'mensaje' => 'required'
        ]);
        //  Store data in database
        Contacto::create($request->all());
        //
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
