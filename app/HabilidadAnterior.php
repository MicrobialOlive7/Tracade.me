<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabilidadAnterior extends Model
{
    protected $table = 'habilidad_anterior';

    protected $fillable = [
        'han_id_habilidad','han_id_habilidad_anterior'
    ];
}
