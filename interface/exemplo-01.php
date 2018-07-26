<?php
//interface
interface Veiculo{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
  //  public function retrovisor($olhar);
    
}

class Civic implements Veiculo{
    public function acelerar($velocidade){
        echo "O veiculo acelerou até ".$velocidade." km/h. <br/>";
    }
    
    public function freiar($velocidade){
        echo "O veiculo freiou para ".$velocidade." km/h. <br/>";
    }
    
    public function trocarMarcha($marcha) {
        echo "O veiculo engatou a marcha número: ".$marcha."." ;
    }
    
}

$carro= new Civic;
$carro->acelerar("50");
$carro->freiar("10");
$carro->trocarMarcha("2");
?>