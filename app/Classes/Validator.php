<?php

namespace App\Classes;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator as LaravelValidator;

class Validator extends LaravelValidator {

   public function validateFotoPostulante($attribute, $value, $parameters)
   {
      $submit = $this->getValue($parameters[0]);
      $input = $this->getValue($parameters[1]);

      if ($submit == 'E') {
         if ($value == '.') {
            if (empty($input)) {
               return false;
            }
         }
      }
      return true;
   }

   public function validateRequiredIfUnderage($attribute, $value, $parameters)
   {
      $age = $this->getValue($parameters[0]);

      if ($age < 18) {
         if (empty($value)) {
            return false;
         }
      }
      return true;
   }

   public function validateRequiredAtLeastOne($attribute, $value, $parameters)
   {
      $otherfield = $this->getValue($parameters[0]);

      if (empty($value) && empty($otherfield)) {
         return false;
      }

      return true;
   }

   public function validateDni($attribute, $value, $parameters)
   {
      $tdocument = $this->getValue($parameters[0]);

      // DNI
      if ($tdocument == '01001') {
         if (empty($value)) {
            return false;

         } else if (!preg_match('/^[0-9]*$/', $value)) {
            return false;

         } else if (strlen($value) != 8) {
            return false;
         }
      }

      return true;
   }

}
