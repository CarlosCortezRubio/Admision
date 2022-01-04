<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    protected $table='admision.adm_postulante';
    protected $primaryKey = 'id_postulante';
    public $timestamps = false;
    protected $fillable = [
        'id_programacion_examen',
        'nume_docu_sol',
        'nota',
        'estado',
    ];
}
