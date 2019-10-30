<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'habilidad';

    protected $fillable = [
        'hab_nombre','hab_dificultad', 'hab_descripcion', 'dis_id'
    ];
}
