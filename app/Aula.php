<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aula extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'aula';

    protected $fillable = [
        'aul_salon', 'aul_edificio', 'aul_campus'
    ];
}
