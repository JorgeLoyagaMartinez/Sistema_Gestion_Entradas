<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['nombre','apellido','mail','telefono','password','pais','direccion','ciudad','provincia','codigo postal','celular','email'];
    use HasFactory;
}
