<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisciplinaAlumno extends Model
{
    protected $table = 'disciplina_alumno';

    protected $fillable = [
        'alu_id','dis_id'
    ];
}
