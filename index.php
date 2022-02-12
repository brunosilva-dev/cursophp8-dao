<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);

//Carrega um usuário
// $root = new Usuario();
// $root->loadbyId(3);
// echo $root;

// Carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

// Carrega usuario usando login e senha
// $usuario = new Usuario();
// $usuario->login("user2", "654321");
// echo $usuario;

// Criando usuário novo
// $aluno = new Usuario("aluno2", "123");

// $aluno->insert();

// echo $aluno;

// Atualizando usuário
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("professor", "!@#$%");
echo $usuario;
