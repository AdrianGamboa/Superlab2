<?php

namespace App\Http\Controllers;

use App\Models\Contact_model;
use App\Models\Gallery__model;
use App\Models\Home_model;
use App\Models\Service_model;
use Illuminate\Http\Request;


class Administrator extends Controller
{
    public function index() {
        
        $comentarios = Contact_model::all();
        $secciones= Home_model::all();

        return view('administrator',['comentarios' => $comentarios,'secciones' => $secciones]);
    }
    
    public function update(Request $request) {
        
        if ($request->txt_seccion != "0") {
           
            $seccion = Home_model::find((int)$request->txt_seccion);
           
            if ($request->txt_descripcion != "" && $request->txt_titulo != "") {

                if ($request->file('txt_file') != null) {
                    $seccion->banner = $request->file('txt_file')->getClientOriginalName();
                    $request->file('txt_file')->move("../resources/img", $request->file('txt_file')->getClientOriginalName());
                }

                $seccion->descripcion = $request->txt_descripcion;
                $seccion->titulo = $request->txt_titulo;
                $seccion->save(); 
            }
        }

        return redirect()->route('administrator');
    }
    public function add_gallery(Request $request) {

        $gallery = new Gallery__model();

        if ($request->file('txt_file_g') != null && $request->txt_descripcion_g != "") {
            $gallery->nombre = $request->file('txt_file_g')->getClientOriginalName();
            $request->file('txt_file_g')->move("../resources/gallery", $request->file('txt_file_g')->getClientOriginalName());
            $gallery->descripcion = $request->txt_descripcion_g;
            $gallery->save(); 
        }
        
        return redirect()->route('administrator');
    }
    
    public function add_service(Request $request) {
    
        $servicio = new Service_model();

        if ($request->txt_nombre_serv != "" && $request->txt_descripcion_serv != "") {
            
            $servicio->nombre = $request->txt_nombre_serv;
            $servicio->descripcion = $request->txt_descripcion_serv;
            $servicio->save(); 
        }
        
        return redirect()->route('administrator');
    }
}
