<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Ludwig Von Misses");
$cad->setEmail("misses@gmail.com");
$cad->setSenha("sqwdqwdq");

$cad->registrarVenda();

echo $cad;

 ?>