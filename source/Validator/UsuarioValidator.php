<?php
namespace Source\Validator;

use Source\Validator\Validator;

class UsuarioValidator extends Validator {

   public static function isEmailFromGmail(String $email) {

      if(Validator::isEmail($email)) {

         $dominio = explode('@', $email);

         return ((strpos($dominio[1], 'gmail')) === false) ? false : true;

      } else {

         return false;
      }


   }

}