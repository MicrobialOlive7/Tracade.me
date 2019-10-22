<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampoAdicional extends Model
{
    protected $table = 'campo_adicional';

    protected $fillable = [
        'cad_nombre', 'cad_contenido', 'hab_id'
    ];
}
