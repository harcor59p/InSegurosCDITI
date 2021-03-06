<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soat extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'Modelo',
        'serie',
        'cilindraje',
        'marca',
        'color',
        'servicio',
        'vr_soat',
    ];
}

