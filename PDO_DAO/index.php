<?php 

require_once("config.php");
//$sql = new SQL();
//$usuarios = $sql->select(" SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


//Carrega apenas um usuario
//$root= new Usuario();
//$root->loadById(8);
//echo $root;

//Carrega uma lista de usuarios(statico)
//$lista = Usuario::getList();
//echo json_encode($lista);

//Busca por login(statico)
//$busca  = Usuario::search("te");
//echo json_encode($busca);


//carrega um usuario apos logar no sistema com login e senha corretas.
$usuario = new Usuario();
$usuario->login("usertest","#$%%");
echo $usuario;
 ?>