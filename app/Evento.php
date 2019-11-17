<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'evento';

    protected $fillable = [
        'eve_nombre','eve_fecha', 'eve_hora', 'eve_descripcion', 'gru_id'
    ];
}
