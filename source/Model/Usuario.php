<?php
namespace Source\Model;

use Source\Validator\UsuarioValidator;


class Usuario {
   private $id;
   private String $nome;
   private String $email;

   public function getID(): int { return $this->id; }
   public function setID(int $id): void { $this->id = $id; }

   public function getNome(): String { return $this->nome; }
   public function setNome(String $nome): void { $this->nome = $nome; }

   public function getEmail(): String { return $this->email; }
   public function setEmail(String $email): void { $this->email = $email; }


   public function save() {
      echo "Salvando... novo usuario {$this->nome} e email {$this->email} ";

      UsuarioValidator::setMsg('Usuário salvo com sucesso', 'success');
   }

   public function isValid() {

      if(UsuarioValidator::isEmailFromGmail($this->email)) {
         UsuarioValidator::setMsg('Usuário deve pertencer ao G-mail.');
         return false;
      }

      return true;
   }
}
