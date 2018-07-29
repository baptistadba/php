<?php 

$idadeCrianca = 12;
$idadeAdolecente = 21;
$idadeAdulto = 36;
$idadeIdoso = 65;

	if ($qualASuaIdade<$idadeCrianca) {

		echo "Criança";

	}else if ($qualASuaIdade<$idadeAdolecente) {
	
		echo "Adolescente";
	
	}else if ($qualASuaIdade>$idadeIdoso) {
	
		echo "Idoso";
	
	}else{
	
		echo "Adulto";
	
	}



 ?>