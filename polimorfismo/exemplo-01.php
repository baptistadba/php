<?php

/*
Polimorfismo
 */
abstract class Animal {
    public function mover(){          
        return "Anda";
    }
    
    public function falar(){
        return "Som";
    }        
}

class Cachorro extends Animal{
    public function falar(){
        echo get_class($this);
        echo "<br/>";
        return "Late";
    }
}

class Gato extends Animal{
    public function falar(){
        echo get_class($this);
        echo "<br/>";
        return "Mia";
    }
}

class Passaro extends Animal{
    public function falar(){
        echo get_class($this);
        echo "<br/>";
        return "Canta";
    }
    public function mover(){     
        return "Voa e ".parent::mover().".";//recupera valor da classe pai
    }
    public function arma(){
        return "Caga na cabeça das pessoas!!";
    }
}


$taruk = new Cachorro();
echo $taruk->falar()."<br/>";
echo $taruk->mover()."<br/>";
echo "_-_-_-_-_-_-_-_-_-_-_-_-_-_-_<br/><br/>";

$tom = new Gato();
echo $tom->falar()."<br/>";
echo $tom->mover()."<br/>";


echo "_-_-_-_-_-_-_-_-_-_-_-_-_-_-_<br/><br/>";

$piupiu = new Passaro();
echo $piupiu->falar()."<br/>";
echo $piupiu->mover()."<br/>";
echo $piupiu->arma()."<br/>";
echo "_-_-_-_-_-_-_-_-_-_-_-_-_-_-_<br/><br/>";