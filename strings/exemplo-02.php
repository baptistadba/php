<?php 

$programa='EXrep';

$programa = str_replace("E","3",$programa);
$programa = str_replace("e","3</br>",$programa);

$frase = "A repetição é a mãe da redenção.";
$palavra = "mãe";
$q = strpos($frase,$palavra);
$texto = substr($frase,0,$q);
var_dump($q);
echo "</br>";
var_dump($texto);
echo "</br>";
$texto2=substr($frase,$q+strlen($palavra),strlen($frase));
var_dump($texto2);
echo "</br>";



 ?>