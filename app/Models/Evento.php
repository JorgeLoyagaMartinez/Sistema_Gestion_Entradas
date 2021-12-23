<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';
    protected $fillable = ['nombre', 'descripcion', 'portada', 'fecha', 'lugar', 'horario', 'precio', 'stock', 'estado'];
    use HasFactory;
}
