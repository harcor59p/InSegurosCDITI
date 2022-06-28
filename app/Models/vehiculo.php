<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_cot',
        'placa',
        'Modelo',
        'serie',
        'cilindraje',
        'marca',
        'color',
        'servicio',
        'vr_serg_vehi',
    ];
}
