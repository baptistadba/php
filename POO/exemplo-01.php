<?php 


class Pessoa{

	public $nome;

	public function falar(){
		return "O meu nome é: ".$this->nome."</br>";

	}

}

//instanciando o objeto
$baptista = new Pessoa();
$baptista->nome = "Viuse Luba";
echo $baptista->falar();
echo $baptista->falar();

 ?>