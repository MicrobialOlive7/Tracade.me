<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'disciplina';

    protected $primaryKey = 'dis_id';

    protected $fillable = [
        'dis_nombre','dis_descripcion'
    ];
}
