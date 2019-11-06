<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nota extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'nota';

    protected $fillable = [
        'not_nota','hab_id', 'alu_id'
    ];
}
