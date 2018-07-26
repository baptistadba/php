<?php

function __autoload($nomeClasse){
    var_dump($nomeClasse);
    echo "<br/><br/>";
    require_once("$nomeClasse.php"); 
}
 
//require_once("abstrata" . DIRECTORY_SEPARATOR ."Automovel.php");
//require_once("Opala.php");

//$carro = new Automovel(); // Nao pode instanciar a classe abstrata diretamente
$carro = new Opala();// é preciso criar uma classe como Opala
$carro->acelerar("160");
$carro->freiar("60");
$carro->trocarMarcha("2");
$carro->rebaixar();

?>