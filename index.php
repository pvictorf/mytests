<?php
require 'vendor/autoload.php';

use Source\Model\Usuario;
use Source\Validator\Validator;

$json = new stdClass();

$paulo = new Usuario();
$paulo->setNome('c');
$paulo->setEmail('');

if($paulo->isValid()) {
   $paulo->save();
}

$json->msg = Validator::getMsg();
http_response_code(Validator::getStatusCode());

echo json_encode($json);
