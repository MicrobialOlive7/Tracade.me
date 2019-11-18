<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grupo extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'grupo';

    protected $fillable = [
        'gru_nombre','gr_dia','gru_hora', 'aul_id', 'dis_id'
    ];
}
