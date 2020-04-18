<?php
namespace Source\Validator;

class Validator {
   public static $instance;
   protected static $msg;
   protected static $type;
   protected static $code;

   public static function getInstance() {
      if(self::$instance === null){
         self::$instance = new self;
      }
      return self::$instance;
   }


   public function getMsg(): String {
      return self::$msg;
   }


   public function setMsg(String $msg, String $type = ''): self {
      if(self::$msg === null) {
         self::$msg  = $msg;
         self::$type = $type;
      }
      return self::getInstance();
   }


   public function getStatusCode() {
      return self::$code;
   }


   public function setStatusCode(int $code): self {
      if(self::$code === null) {
         self::$code = $code;
      }
      return $this;
   }

   public static function isEmail(String $email): bool {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
   }

}