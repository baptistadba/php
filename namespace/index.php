<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Ludwig Von Misses");
$cad->setEmail("misses@gmail.com");
$cad->setSenha("sqwdqwdq");

echo "</br>";
$cad->registrarVenda();
echo "</br>";
echo "</br>";

print_r($cad."</br></br>");
echo "</br>";

var_dump($cad."</br></br>");
echo "</br>";
	
echo $cad."</br>";;

 ?>