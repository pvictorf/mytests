<?php
require 'vendor/autoload.php';

use Source\Model\Usuario;
use Source\Validator\Validator;

$json = new stdClass();

$usuario = new Usuario();
$usuario->setNome('c');
$usuario->setEmail('');

if($usuario->isValid()) {
   $usuario->save();
}

$json->msg = Validator::getMsg();
http_response_code(Validator::getStatusCode());

echo json_encode($json);
