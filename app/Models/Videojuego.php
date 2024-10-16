<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'genero',
        'plataforma',
        'anio_lanzamiento',
        'desarrollador',
        'precio',
        'calificacion',
        'disponible',
        'fecha_publicacion'
    ];
}
