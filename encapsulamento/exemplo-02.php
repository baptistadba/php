<?php 

class Pessoa {

//PUBLIC - TODO MUNDO CONSEGUE ENXERGAR.
public $nome ="BOB MARLEY PAI";

//PROTECT  - MESMA CLASSE E CLASSES EXTENDIDAS.
protected $idade = 99;

//PRIVATE - SÓ NA MESMA CLASSE.
private $senha = "654321";

public function verDados(){
		echo $this->nome . "</br>";
		echo $this->idade . "</br>";
		echo $this->senha . "</br>";
	}

}


class Programador extends Pessoa{
	public function verDados(){
			
			echo get_class($this) . "</br>";

			echo $this->nome . "</br>";
			echo $this->idade . "</br>";
			echo $this->senha . "</br>";
		}


}



$objeto = new Programador();
echo $objeto->nome."</br>";

//Nao podem ser acessados diretamente pois sao protected e private
//echo $objeto->idade."</br>";
//echo $objeto->senha."</br>";

echo "</br>";

//Esse metodo pode acessa os 3 dados.
echo $objeto->verDados();

 ?>