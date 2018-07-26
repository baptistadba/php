<?php
//interface
interface Veiculo{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
  //  public function retrovisor($olhar);
    
}

abstract class Automovel implements Veiculo{
    public function acelerar($velocidade){
        echo "O veiculo acelerou até ".$velocidade." km/h. <br/>";
    }
    
    public function freiar($velocidade){
        echo "O veiculo freiou para ".$velocidade." km/h. <br/>";
    }
    
    public function trocarMarcha($marcha) {
        echo "O veiculo engatou a marcha número: ".$marcha.". <br/>" ;
    }
    
}

class Opala extends Automovel{
    public function rebaixar(){
       echo "Veiculo Rebaixado a 3cm do chao!! <br/>";
    }
}

//$carro = new Automovel(); // Nao pode instanciar a classe abstrata diretamente
$carro = new Opala();// é preciso criar uma classe como Opala
$carro->acelerar("200");
$carro->freiar("60");
$carro->trocarMarcha("2");
$carro->rebaixar();

?>