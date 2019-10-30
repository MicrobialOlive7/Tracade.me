<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'aula';

    protected $fillable = [
        'aul_salon', 'aul_edificio', 'aul_campus'
    ];
}
