<?php 

function incluirClasses($nomeClasse){

	if (file_exists($nomeClasse.".php") === true){

	require_once($nomeClasse.".php");
	
	}
	
}

//Classes na pasta raiz
spl_autoload_register("incluirClasses");

//Classes na subpasta
spl_autoload_register(function($nomeClasse){
	
	if (file_exists("abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){

	require_once("abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php");
	
	}
});

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