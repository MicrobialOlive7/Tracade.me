<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'evento';

    protected $fillable = [
        'eve_nombre','eve_fecha', 'eve_hora', 'eve_descripcion', 'gru_id'
    ];
}
