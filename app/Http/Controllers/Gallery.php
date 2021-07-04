<?php

namespace App\Http\Controllers;

use App\Models\Gallery__model;
use App\Models\Home_model;
use Illuminate\Http\Request;

class Gallery extends Controller
{
    public function index() {

        $gallery = Home_model::find(4);
        $imagenes = Gallery__model::all();

        return view('gallery', ['seccion' => $gallery, 'imagenes' => $imagenes]);
    }
    public function delete($foto) {

        $imagen = Gallery__model::find($foto);
        $imagen->delete();

        return redirect()->route('galleryAdmin');
    }

    public function galleryAdmin() {

        $gallery = Home_model::find(4);
        $imagenes = Gallery__model::all();

        return view('galleryAdmin', ['seccion' => $gallery, 'imagenes' => $imagenes]);
    }
}
