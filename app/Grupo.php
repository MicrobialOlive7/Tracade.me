<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'grupo';

    protected $fillable = [
        'gru_nombre','gru_horario', 'aul_id', 'dis_id'
    ];
}
