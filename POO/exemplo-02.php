<?php 

class Carro{
	private $modelo;
	private $motor;
	private $ano;
	private $cor;
	private $preço;

	public function getModelo(){
		return $this->modelo;

	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno():int{
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;		
	}

	public function getCor(){
		return $this->cor;
	}

	public function setCor($cor){
		$this->cor = $cor;
	}

	public function getPreço(){
		return $this->preço;
	}

	public function setPreço($preço){
		$this->preço = $preço;
	}

	///////////////////////////////////

	public function exibirVeiculo(){
		return array(
			"modelo" => $this->getModelo() , 
			"motor" => $this->getMotor() ,
			"ano" => $this->getAno(),
			"cor" => $this->getCor(),						 
			"preço" => $this->getPreço() 			
			);
	}

}

$honda = new Carro();
//Cannot access private property Carro::$modelo 
//$honda->modelo = "CIVIC";
$honda->setModelo("CIVIC");
$honda->setMotor("1.8");
$honda->setAno("2018");
$honda->setCor("Preto");
$honda->setPreço(65000);



print_r($honda->exibirVeiculo());

echo "</br>";
var_dump($honda->exibirVeiculo());



 ?>