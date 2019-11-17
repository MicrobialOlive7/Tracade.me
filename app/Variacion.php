<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variacion extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'variacion';

    protected $fillable = [
        'var_id_habilidad','var_id_habilidad_variacion'
    ];
}
