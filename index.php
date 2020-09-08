<?php

require_once("config.php");

#$sql = new Sql();
#$usuarios = $sql->select("SELECT * FROM tb_usuarios");
#echo json_encode($usuarios);


#Carrega somente 01 usuários
#$root = new Usuario();
#$root->loadById(1);
#echo $root;

#Carrega lista de usuários
#$lista = Usuario::getList();
#echo json_encode($lista);


#Carrega lista de buscando login
#$search = Usuario::search("te");
#echo json_encode($search);

#Carreha um usuario usando o login e a senha
#$usuario = new Usuario();
#$usuario->login("teste","teste");
#echo $usuario;


#Criando um Novo Usuário
#$aluno = new Usuario();
#$aluno->setDeslogin("aluno");
#$aluno->setDessenha("123");
#$aluno->insert();
#echo $aluno;

/*Alterar um usuário
$usuario = new Usuario();
$usuario->loadByID(8);
$usuario->update("professora", "*&¨%$#");
echo $usuario
*/

$usuario = new Usuario();
$usuario->loadByID(7);
$usuario->delete();
echo $usuario;


?>