<?php
/**
 * Aqui é demonstrado como cria uma classe e instancia-lá.
 *
 * @author 3l3m3ntox
 */
class Pessoa {
    public $nome;//Atributo
    public function falar(){//Método
    
       return "OI!O meu nome é ".$this->nome; //$this->nome sem o Cifrao Só dentro de um metodo.
       //    $this-> é uma variavel interna para recuperar valores de atributos ou metodos
    }  
}

$roberto = new Pessoa();
$roberto->nome = "José Roberto de Aguiar Baptista";
echo $roberto->falar(); //Mostra o resultado na tela 

?>