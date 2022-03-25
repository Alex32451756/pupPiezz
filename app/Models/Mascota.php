<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'Mascota';
    protected  $primaryKey = 'idMascota';
    //public $timestamps = false;

    protected $fillable = [
        	'nombre', 'edad', 'discapa', 'descripcion','tamano', 'pelaje', 'img', 'idTipo', 'created_at', 'updated_at'
    ];
}
