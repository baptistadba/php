<?php 

$dt = new DateTime();


//site de referencia
//http://php.net/manual/pt_BR/class.dateinterval.php
//adicionar 15 dias
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

echo "</br>";

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");


 ?>