<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'evaluacion';

    protected $fillable = [
        'eva_comentario','eva_calificacion', "hab_id", "alu_id"
    ];
}
