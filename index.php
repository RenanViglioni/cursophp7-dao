<?php

require_once("config.php");

//Carrega um usuário

/*$root = new Usuario();

$root->loadById(3);

echo $root;*/

//Carrega uma lista de usuários / :: utiliza pois o método é STATIC, daí não precisa instanciar o objeto

/*$lista = Usuario::getList();

echo json_encode($lista);*/


//Busca um usuário pelo parametro digitado

 /*$search = Usuario::search("ro");

 echo json_encode($search);*/

//Classe busca um usuário pelo login e senha

 /*$usuario = new Usuario();

 $usuario->login("root","root");

 echo $usuario;*/


 /*$aluno = new Usuario("root", "root");

 $aluno->insert();

 echo $aluno;*/

 //Insert de usuário

 /*$aluno = new Usuario("aluno", "@alun0");

 $aluno->insert();

 echo $aluno;*/

//Alterar um usuario

 /*$usuario = new Usuario();

$usuario->loadById(3);

$usuario->update("professor", "Aasd@#ads");

echo $usuario;*/

//Deletar um usuário

$usuario = new Usuario();

$usuario->loadById(3);

$usuario->delete("professor", "Aasd@#ads");


?>
