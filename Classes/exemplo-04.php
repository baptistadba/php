<?php
//metodos magicos
class Endereco {
    
    private $cidade;
    private $bairro;
    private $logradouro;
    private $numero;
    private $cep;
    
    public function __construct($cid, $bai,$log, $num,$cep) {
        $this->cidade = $cid ;
        $this->bairro = $bai;
        $this->logradouro = $log;
        $this->numero = $num;
        $this->cep = $cep;
    }
    
    public function __destruct(){
        var_dump("Destruir");
    }
   
    public function __toString() {
        return $this->cidade.", ".$this->bairro.", ".$this->logradouro.", ".$this->numero.", ".$this->cep.".";
    }
    
    
}

$meuEndereco = new Endereco("Brasilia","Entre Lagos","Etapa 1,Conj C,Casa","17","73255900");
//var_dump($meuEndereco);
//unset($meuEndereco);
echo $meuEndereco;