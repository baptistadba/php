<?php

class Pessoa {
    public $nome = "Rasmus Lerdof";
    protected $idade = 48;
    private $senha = "132465798";
    
    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
                
    }
            
}

$objeto = new Pessoa();
echo $objeto->nome."<br/>";
//echo $objeto->idade."<br/>";// nao pode acessar o atributo protejido
//echo $objeto->senha."<br/>"; // nao pode acessar o atributo privado

$objeto->verDados();

?>