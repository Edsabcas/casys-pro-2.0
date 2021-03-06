<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol_usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_USUARIO',
        'name',
        'email',
        'password',
        'usuario',
        'img_users',
        'DESCRIPCION',
    ];
}
