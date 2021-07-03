<?php

namespace App\Http\Controllers;

use App\Models\Home_model;
use Illuminate\Http\Request;

class About extends Controller
{
    public function index() {

        $about = Home_model::find(2);

        return view('about',['seccion' => $about]);
    }
}
