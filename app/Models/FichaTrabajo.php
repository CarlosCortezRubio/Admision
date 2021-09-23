<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\CustomModel;

class FichaTrabajo extends Model
{
   use CustomModel;

   protected $table = 'ad_trabajo';
   protected $primaryKey = 'codi_trab_tra';

   public $timestamps = false;

   protected $fillable = [
      'obra_trab_tra',
      'comn_trab_tra',
      'inst_trab_tra',
      'codi_post_pos'
   ];
}
