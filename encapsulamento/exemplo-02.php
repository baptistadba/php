<?php

class Pessoa {
    public $nome = "Rasmus Lerdof";
    protected $idade = 48;
    private $senha = "132465798";
    
    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/><br/>";
                
    }
            
}

class Programador extends Pessoa {
    
}

class Desenvolvedor extends Pessoa {
    public function verDados(){
        echo get_class($this)."<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/><br/>";
                
    }
    
}

$objeto = new Programador();
echo "Acessando o Nome Diretamente: <br/>";
echo $objeto->nome."<br/><br/>";
//echo $objeto->idade."<br/>";// nao pode acessar o atributo protejido
//echo $objeto->senha."<br/>"; // nao pode acessar o atributo privado
echo "Acessando todos os dados da classe: <br/>";
$objeto->verDados();

echo "Acessando Desenvolvedor <br/>";
$objeto2 = new Desenvolvedor();
echo "Somente os atributos public e protected<br/>";
$objeto2->verDados();

?>