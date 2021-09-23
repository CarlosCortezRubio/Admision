<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\CustomModel;

class FichaRepertorio extends Model
{
   use CustomModel;

   protected $table = 'ad_repertorio';
   protected $primaryKey = 'codi_repe_rep';

   public $timestamps = false;

   protected $fillable = [
      'auto_repe_rep',
      'obra_repe_rep',
      'dura_repe_rep',
      'codi_post_pos'
   ];
}
