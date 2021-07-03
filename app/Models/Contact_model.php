<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_model extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "comentarios"; //Define la tabla con la que va a trabajar el modelo
    protected $primaryKey = 'idComentarios'; //Define el nombre de la llave primaria de la tabla
}
