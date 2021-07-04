<?php

namespace App\Http\Controllers;

use App\Models\Contact_model;
use App\Models\Home_model;
use Illuminate\Http\Request;


class Administrator extends Controller
{
    public function index() {
        
        $comentarios = Contact_model::all();
        $secciones= Home_model::all();

        return view('administrator',['comentarios' => $comentarios,'secciones' => $secciones]);
    }
    
    public function update(Request $request) {
        
        if ($request->txt_seccion != "0") { //Editar seccion de Inicio
            $seccion = Home_model::find((int)$request->txt_seccion);
            $seccion->titulo = $request->txt_titulo;

            if ($request->file('txt_file') != null) {
                $seccion->banner = $request->file('txt_file')->getClientOriginalName();
                $request->file('txt_file')->move("../resources/img", $request->file('txt_file')->getClientOriginalName());
            }
            
            $seccion->descripcion = $request->txt_descripcion;
            $seccion->save(); 
        }

        return redirect()->route('administrator');
    }
}
