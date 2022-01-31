<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\CustomModel;
use App\Models\Proceso;

class Ficha extends Model
{
   use CustomModel;

   protected $table = 'ad_postulacion';
   protected $primaryKey = 'codi_post_pos';

   public $timestamps = false;

   protected $fillable = [
      'codi_proc_adm',
      'codi_secc_sec',
      'codi_espe_esp',
      'foto_post_per',
      'apel_pate_per',
      'apel_mate_per',
      'nomb_pers_per',
      'codi_pais_per',
      'tipo_docu_per',
      'nume_docu_per',
      'edad_calc_pos',
      'file_docu_pos',
      'ubig_domi_per',
      'telf_fijo_per',
      'telf_celu_per',
      'tipo_prep_pos',
      'desc_prep_pos',
      'nomb_corr_pos',
      'apel_nomb_apd',
      'telf_fijo_apd',
      'nume_docu_apd',
      'esta_post_pos',
      'tecn_post_pos',
      'codi_pers_per',
      'nume_expe_pos',
      'edad_calc_pos',
      'flag_corr_pos',
      'term_regi_aud',
      'term_actu_aud',
      'codi_doce_adm',
      'codi_espe_adm',
      'nive_estu_adm',
      'grad_estu_adm',
      'flag_disc_adm',
      'disc_soli_adm',
      'fech_naci_per'
   ];

   protected $dates=[
      //'fech_naci_per',
      'fech_regi_aud',
      'fech_actu_aud'
   ];

   public function getNumeExpePosAttribute($value)
   {
      $proceso = Proceso::find($this->codi_proc_adm);
      $seccion = $this->codi_secc_sec;

      if ($seccion == '05001') {
         $numExpe = 'S';
      } else if ($seccion == '05002') {
         $numExpe = 'P';
      } else if ($seccion == '05003') {
         $numExpe = 'E';
      }

      $numExpe = $numExpe.substr($proceso->nume_proc_adm, 2).str_pad($value + 1,4,'0',STR_PAD_LEFT);

      return $numExpe;
   }
}
