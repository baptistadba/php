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


class C3 extends Automovel{
	public function turbo($ativado){		
	echo "Turbo ativado!!</br>";
	}

}

//Cannot instantiate abstract class Automovel in c:....
//$carro = new Automovel();
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