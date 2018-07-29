<?php 

////include '../treinamento/exemplo-01.php';
//include 'exemplo-01.php';
//include_once 'exemplo-01.php';

//require 'exemplo-01.php';
require_once 'exemplo-01.php';

$num1 = $_GET["valor1"];
$num2 = $_GET["valor2"];

$resultado = somar($num1,$num2);
//http://localhost:91/Treinamento/include/exemplo-02.php?valor1=100&valor2=20
echo $resultado;

 ?>