<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'nota';

    protected $fillable = [
        'not_nota','hab_id', 'alu_id'
    ];
}
