<?php 

interface Veiculo{
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

}


abstract class Automovel implements Veiculo{
	public function acelerar($velocidade){
		echo "O veiculo acelerou até $velocidade Km/h.</br>";
	}	

	public function freiar($velocidade){
		echo "O veículo freiou até $velocidade Km/h.</br>";
	}

	public function trocarMarcha($marcha){
		echo "O veiculo engatou a ".$marcha."° marcha.</br>";	
	}

}


 ?>