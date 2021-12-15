<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FichaFormRequest extends FormRequest
{
   public function authorize()
   {
      return true;
   }

   //2021 Se comentó técnica
   public function rules()
   {
      return [
         'apel_pate_per'=>'required|max:30',
         'apel_mate_per'=>'required|max:30',
         'nomb_pers_per'=>'required|max:40',
         'codi_pais_per'=>'required',
         'foto_post_per'=>'nullable|image|max:3072',
         'file_docu_pos'=>'nullable|image|max:3072',
         'arch_foto_per'=>'foto_postulante:submit,foto_post_per',
         'arch_docu_per'=>'foto_postulante:submit,file_docu_pos',
         'ubig_domi_per'=>'required|min:6',
         'telf_fijo_per'=>'required_at_least_one:telf_celu_per|max:20',
         'tipo_prep_pos'=>'required',
         'nomb_corr_pos'=>'required_if:flag_corr_pos,==,S|max:150',
         'apel_nomb_apd'=>'required_if_underage:edad_calc_pos|max:150',
         'telf_fijo_apd'=>'required_if_underage:edad_calc_pos|max:20',
         'nume_docu_apd'=>'required_if_underage:edad_calc_pos|digits:8',
         //'tecn_post_pos'=>'required|max:1000',
      ];
   }

   //2021 Se comentó técnica
   public function messages()
   {
      return [
         'ubig_domi_per.*'=>'Debe seleccionar su lugar de residencia.',
         'arch_foto_per.foto_postulante'=>'Debe seleccionar una fotografía.',
         'arch_docu_per.foto_postulante'=>'Debe seleccionar una fotografía del documento de identidad.',
         'foto_post_per.*'=>'La fotografía debe ser una imagen válida con un peso máximo de 3MB.',
         'file_docu_pos.*'=>'La fotografía del documento de identidad debe ser una imagen válida con un peso máximo de 3MB.',
         'required_at_least_one'=>'Debe especificar su teléfono fijo o teléfono celular.',
         'nomb_corr_pos.required_if'=>'Al indicar que requiere correpetidor, debe especificar el nombre.',
         'apel_nomb_apd.required_if_underage'=>'Debe especificar los nombres y apellidos del apoderado.',
         'telf_fijo_apd.required_if_underage'=>'Debe especificar el teléfono del apoderado.',
         'nume_docu_apd.required_if_underage'=>'Debe especificar el DNI del apoderado.',
         'nume_docu_apd.digits'=>'El DNI del apoderado debe tener 8 dígitos.',
         //'tecn_post_pos.required'=>'El campo técnica es obligatorio.',
      ];
   }

   //2021 Se comentó técnica
   public function attributes()
   {
      return [
         'apel_pate_per'=>'apellido paterno',
         'apel_mate_per'=>'apellido materno',
         'nomb_pers_per'=>'nombres',
         'codi_pais_per'=>'país',
         'foto_post_per'=>'fotografía del postulante',
         'file_docu_pos'=>'fotografía del documento del postulante',
         'ubig_domi_per'=>'lugar de residencia',
         'telf_fijo_per'=>'teléfono fijo',
         'telf_celu_per'=>'teléfono celular',
         'tipo_prep_pos'=>'tipo de preparación',
         'nomb_corr_pos'=>'nombre del correpetidor',
         'apel_nomb_apd'=>'nombres y apellidos del apoderado',
         'telf_fijo_apd'=>'teléfono del apoderado',
         'nume_docu_apd'=>'DNI del apoderado',
         //'tecn_post_pos'=>'técnica',
         'arch_foto_per'=>'fotografía del postulante',
         'arch_docu_per'=>'fotografía del documento del postulante',
      ];
   }
}