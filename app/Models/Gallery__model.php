<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery__model extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "galerias"; //Define la tabla con la que va a trabajar el modelo
    protected $primaryKey = 'idGalerias'; //Define el nombre de la llave primaria de la tabla
}
