<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disciplina extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'disciplina';

    protected $fillable = [
        'dis_nombre','dis_descripcion'
    ];
}
