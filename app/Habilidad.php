<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Habilidad extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'habilidad';

    protected $fillable = [
        'hab_nombre','hab_dificultad', 'hab_descripcion', 'dis_id'
    ];
}
