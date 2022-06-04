<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_seccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_SC',
        'SECCION',
        'ESTADO',
    ];
}

