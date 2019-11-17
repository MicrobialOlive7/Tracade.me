<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluacion extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'evaluacion';

    protected $fillable = [
        'eva_comentario','eva_calificacion', "hab_id", "alu_id"
    ];
}
