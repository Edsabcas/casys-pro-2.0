<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_NOTA',
        'NOTA',
        'ID_ACTIVIDADES',
        'ID_ESTUDIANTE',
        'id_user',
        'ID_UNIDADES',
        'ID_UNIDADES_FIJAS',
        'ID_MATERIA',
        'ID_GR',
        'ID_SC',
    ];
}
