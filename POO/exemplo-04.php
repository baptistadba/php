<?php 
//metodos magicos
// começa com __

class Endereço{
	
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($l, $n, $c){
		$this->logradouro = $l;
		$this->numero = $n;
		$this->cidade = $c; 
		# code...
	}

	public function __destruct(){
		echo "</br>";
		var_dump("Objeto destruído!!");
		
	}

	public function __toString(){
		return $this->logradouro.",".$this->numero.",".$this->cidade;

	}

}

$meuEndereço = new Endereço("SQN 200, BLOCO X"," N° 300"," Brasília/DF");

echo "</br>";
echo "Meu endereco é: $meuEndereço.</br>";
echo "</br>";
echo "</br>";
print_r($meuEndereço);
//ctrl+U - para ver objeto no navegador

unset($meuEndereço);

 ?>