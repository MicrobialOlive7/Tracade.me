<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = 'disciplina';
protected $primaryKey = 'dis_id';
    protected $fillable = [
        'dis_nombre','dis_descripcion'
    ];
}
