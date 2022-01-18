<?php

namespace App\Models;

use App\Traits\CustomModel;
use Illuminate\Database\Eloquent\Model;

class Audiotmp extends Model
{
    use CustomModel;

   protected $table = 'admision.adm_audiostmp';
   protected $primaryKey = 'id_audio';

   public $timestamps = false;

   protected $fillable = [
      'id_examen_postulante',
      'archivo',
      'estado',
      'contador'
   ];
}
