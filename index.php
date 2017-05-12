<?php

require_once("config.php");

//Carrega um usuario
// $jose = new Usuario();
// $jose->loadById(3);
//
// echo $jose;

//Carrega uma lista de usuarios
// $lista = Usuario::getList();
//
// echo json_encode($lista);

//Carrega uma lista de usuários bunscando pelo login
// $search = Usuario::search("j");
//
// echo json_encode($search);

//Carrega um usuário usando o login e a setDessenha
$usuario = new Usuario();
$usuario->login("jose","1235678");

echo $usuario;

 ?>
