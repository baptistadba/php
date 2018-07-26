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

?>