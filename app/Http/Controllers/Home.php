<?php

namespace App\Http\Controllers;
use App\Models\Home_model;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index() {

        $home = Home_model::find(1);

        return view('home', ['seccion' => $home]);
    }
}
