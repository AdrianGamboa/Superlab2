<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_model extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "secciones"; //Define la tabla con la que va a trabajar el modelo
    protected $primaryKey = 'idSecciones'; //Define el nombre de la llave primaria de la tabla
}
