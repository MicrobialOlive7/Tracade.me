<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoAlumno extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'grupo_alumno';

    protected $fillable = [
        'gru_id','alu_id'
    ];
}
