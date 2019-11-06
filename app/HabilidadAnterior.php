<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HabilidadAnterior extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'habilidad_anterior';

    protected $fillable = [
        'hab_id','hab_ant_id'
    ];
}
