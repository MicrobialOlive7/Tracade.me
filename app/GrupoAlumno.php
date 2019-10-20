<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoAlumno extends Model
{
    protected $table = 'grupo_alumno';

    protected $fillable = [
        'gru_id','alu_id'
    ];
}
