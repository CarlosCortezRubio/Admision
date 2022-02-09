<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table='admision.adm_respuestas';
    protected $primaryKey = 'id_respuesta';
    public $timestamps = false;
    protected $fillable = [
        'id_postulante',
        'key',
        'respuesta',
    ];
}
