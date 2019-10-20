<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variacion extends Model
{
    protected $table = 'variacion';

    protected $fillable = [
        'var_id_habilidad','var_id_habilidad_variacion'
    ];
}
