<?php 


/*
//Só para o arquivo funcionar! 
require_once("abstratas".DIRECTORY_SEPARATOR."Automovel.php");
require_once("C3.php");
*/

//Só chama o arquivo na pasta raiz.
//Esta causando um erro por nao encontrar o arquivo Automovel.php 
//na subpasta abstratas.
function __autoload($nomeClasse){
	require_once("$nomeClasse.php");
}

$carro = new C3();
$carro->trocarMarcha(1);
$carro->acelerar(45);
$carro->trocarMarcha(2);
$carro->acelerar(90);
$carro->trocarMarcha(3);
$carro->acelerar(130);
$carro->trocarMarcha(4);
$carro->acelerar(180);
$carro->trocarMarcha(5);
$carro->acelerar(230);
$carro->turbo(true);
$carro->acelerar(260);
$carro->acelerar(261);
$carro->acelerar(262);
$carro->acelerar(263);
$carro->acelerar(262);
$carro->freiar(50);

 ?>