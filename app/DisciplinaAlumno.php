<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DisciplinaAlumno extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'disciplina_alumno';

    protected $fillable = [
        'alu_id','dis_id'
    ];
}
