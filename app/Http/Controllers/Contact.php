<?php

namespace App\Http\Controllers;

use App\Models\Contact_model;
use App\Models\Home_model;
use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index() {

        $contacto = Home_model::find(5);

        return view('contact',['seccion' => $contacto]);
    }

    public function delete($comentario) {

        $com = Contact_model::find($comentario);
        $com->delete();

        return redirect()->route('administrator');
    }

    public function send(Request $request) {
        
        $seccion = new Contact_model;
        $seccion->nombre = $request->txt_nombre;
        $seccion->correo = $request->txt_correo;
        $seccion->comentario = $request->txt_comentario;
        $seccion->save();
    
        return redirect()->route('contact');
    }
}
