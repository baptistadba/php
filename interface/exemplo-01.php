<?php 

interface Veiculo{
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo{
	public function acelerar($velocidade){
		echo "O veiculo acelerou até $velocidade Km/h.</br>";

	}

	public function freiar($velocidade){
		echo "O veiculo freiou até $velocidade Km/h.</br>";

	}

	public function trocarMarcha($marcha){
		echo "O veiculo engatou a ".$marcha."° marcha.<br>";

	}

}



$car = new Civic();
$car->acelerar("165");
$car->freiar("50");
$car->trocarMarcha("2");


 ?>