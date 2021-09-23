<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudFormRequest extends FormRequest
{
   public function authorize()
   {
      return true;
   }

   public function rules()
   {
      return [
         'tipo_docu_sol' => 'required',
         'nume_docu_sol' => 'required|dni:tipo_docu_sol|max:20',
         'mail_soli_sol' => 'required|email|max:100',
      ];
   }

   public function messages()
   {
      return [
         'nume_docu_sol.dni' => 'El DNI debe estar conformado de 8 dígitos.',
         'nume_docu_sol.max' => 'El número de documento de identidad no debe tener más de 20 caracteres.',
         'mail_soli_sol.max' => 'El correo electrónico no debe tener más de 100 caracteres.',
      ];
   }
}