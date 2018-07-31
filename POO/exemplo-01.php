<?php 

class Pessoa{

	public $nome;

	public function falar(){
		return "O meu nome é: ".$this->nome."</br>";

	}

}

$baptista = new Pessoa();
$baptista->nome = "Baptista DBA";
echo $baptista->falar();
echo $baptista->falar();

 ?>