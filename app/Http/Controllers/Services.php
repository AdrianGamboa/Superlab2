<?php

namespace App\Http\Controllers;

use App\Models\Home_model;
use App\Models\Service_model;
use Illuminate\Http\Request;

class Services extends Controller
{
    public function index() {

        $service = Home_model::find(3);
        $servicios = Service_model::all();

        return view('services', ['seccion' => $service, 'servicios' => $servicios]);
    }
    public function delete($servicio) {

        $serv = Service_model::find($servicio);
        $serv->delete();

        return redirect()->route('servicesAdmin');
    }
    public function update($servicio, Request $request) {

        $serv = Service_model::find($servicio);
        if( $request->txt_nombre_serv!='' && $request->txt_descripcion_serv!=''){
            $serv->nombre = $request->txt_nombre_serv;
            $serv->descripcion = $request->txt_descripcion_serv;
            $serv->save();
        }

        return redirect()->route('servicesAdmin');
    }
    public function servicesAdmin() {

        $service = Home_model::find(3);
        $servicios = Service_model::all();

        return view('servicesAdmin', ['seccion' => $service, 'servicios' => $servicios]);
    }

    public function servicesEdit($servicio) {

        $service = Service_model::find($servicio);

        return view('servicesEdit', ['servicio' => $service]);
    }
}
