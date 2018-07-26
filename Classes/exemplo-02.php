<?php
//Uso de atributos e metodos
class Carro {
    private $modelo;
    private $motor;
    private $ano;
    
    public function getModelo() { 
        return $this->modelo;
    }

    public function getMotor():float {
        return $this->motor;
    }

    public function getAno():int {
        return $this->ano;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setMotor($motor) {
        $this->motor = $motor;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }
    
    public function exibir(){
        return array(
            "modelo"=> $this->getModelo(),
            "motor"=> $this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
    
}

$gol = new Carro();
// $gol->modelo = "GOL GT";  //Não é possivel acessar a 
$gol->setModelo("GOL GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());// usado para saber o typo de dado!! lol
echo "<br/>";
echo "<br/>";
print_r($gol->exibir());

exit;
        
        
?>