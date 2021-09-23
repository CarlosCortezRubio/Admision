<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\Tables;
use DB;

class PagoFormRequest extends FormRequest
{
   public function authorize()
   {
      return true;
   }

   public function rules()
   {
	   if ( $this->get('codi_moda_mod') == "E"){
		  return [
			 'tipo_docu_sol' => 'required',
			 'nume_docu_sol' => 'required|max:20',
			 'fech_naci_pos' => 'required|date|before_or_equal:today',
			 'codi_secc_sec' => 'required',
			 'codi_espe_esp' => 'required',
			];
		} else {
			return [
			 'tipo_docu_sol' => 'required',
			 'nume_docu_sol' => 'required|max:20',
			 'fech_naci_pos' => 'required|date|before_or_equal:today',
			 'codi_secc_sec' => 'required',
			 'codi_espe_esp' => 'required',
			 'edad_calc_pos' => 'required|integer|gte:edad_mini_adm|lte:edad_maxi_adm',
			 'flag_estu_pos' => 'required_if:requ_estu_adm,==,S',
		  ];	
		}
   }

   public function messages()
   {	   
          return [
         'fech_naci_pos.required' => 'El campo fecha de nacimiento es obligatorio.',
         'edad_calc_pos.required' => 'No se ha determinado correctamente la edad del postulante, vuelva a seleccionar su fecha de nacimiento.',
         'edad_calc_pos.integer' => 'No se ha determinado correctamente la edad del postulante, vuelva a seleccionar su fecha de nacimiento.',
         'edad_calc_pos.gte' => 'La edad mínima para postular a la especialidad seleccionada es :value años.',
         'edad_calc_pos.lte' => 'La edad máxima para postular a la especialidad seleccionada es :value años.',
         'flag_estu_pos.required_if' => 'La especialidad seleccionada requiere que haya concluido los estudios escolares.',
           ];
   }

   public function attributes()
   {
      return [
         'fech_naci_pos' => 'fecha de nacimiento',
         'codi_secc_sec' => 'sección',
         'codi_espe_esp' => 'especialidad',
         'edad_calc_pos' => 'edad',
         'flag_estu_pos' => 'estudios escolares concluidos',
      ];
   }
   
   public function withValidator($validator)
   {
    	$validator->after(function ($validator) {

			$modalidad = $this->get('codi_moda_mod');
			$result = 0;

			if ($modalidad == 'E') {

			   $result = DB::table('ad_exonerado')
						 ->where('codi_proc_adm','=',$this->get('codi_proc_adm'))
						 ->where('tipo_docu_exo','=',$this->get('tipo_docu_sol'))
						 ->where('nume_docu_exo','=',$this->get('nume_docu_sol'))
						 ->where('codi_secc_exo','=',$this->get('codi_secc_sec'))
						 ->where('codi_espe_exo','=',$this->get('codi_espe_esp'))
						 ->count();
			}

			if ($modalidad == 'E' && $result == 0) {
				$validator->errors()->add('Exonerados', 'No estás en nuestra lista de exonerados');
			} 
			//if (0==0) {
			//	$validator->errors()->add('regla 2', 'reagla 2 detalle');
			//}
		});
	}
}