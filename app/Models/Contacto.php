<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto';
    protected  $primaryKey = 'idMesaje';
    //public $timestamps = false;

    protected $fillable = [
        	'id', 'nombre',	'email', 'asunto', 'mensaje', 'created_at', 'updated_at'
    ];
}
