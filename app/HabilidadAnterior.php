<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabilidadAnterior extends Model
{
    protected $table = 'habilidad_anterior';

    protected $fillable = [
        'hab_id','hab_ant_id'
    ];
}
