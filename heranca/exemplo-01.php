<?php 

class Pessoa {
public $nome ="BOB MARLEY JUNIOR";
protected $idade = 48;
private $senha = "123456";

public function verDados(){
		echo $this->nome . "</br>";
		echo $this->idade . "</br>";
		echo $this->senha . "</br>";
}

}

$objeto = new Pessoa();
echo $objeto->nome."</br>";

//Nao podem ser acessados diretamente pois sao protected e private
//echo $objeto->idade."</br>";
//echo $objeto->senha."</br>";

echo "</br>";

//Esse metodo pode acessa os 3 dados.
echo $objeto->verDados();

 ?>