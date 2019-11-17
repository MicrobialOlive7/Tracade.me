<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampoAdicional extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'campo_adicional';

    protected $fillable = [
        'cad_nombre', 'cad_contenido', 'hab_id'
    ];
}
