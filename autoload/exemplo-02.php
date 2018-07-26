<?php


function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse.".php")=== true){
    require_once($nomeClasse.".php");    
    }    
}


spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){
    if(file_exists("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php")=== true){
        require_once ("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php"); 
    
    }   
    
});



$carro = new Opala();// é preciso criar uma classe como Opala
$carro->acelerar("130");
$carro->freiar("60");
$carro->trocarMarcha("2");
$carro->rebaixar();

?>