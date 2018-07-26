<?php
class Documentos {
    private $numero;
    
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($num){
        $this->numero = $num;
    }
    
}

class CPF extends Documentos{//classe filha
   
    public function validar():bool{
       $numeroCPF = $this->getNumero();
        return false;
    }
    
}

$doc= new CPF;
$doc->setNumero("123456789-44"); 
var_dump($doc->validar());//Busca boleano
echo "<br/>";
echo $doc->getNumero();//busca o valor
?>