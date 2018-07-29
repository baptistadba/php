<?php 

$a = $_GET["valor1"];
$b = $_GET["valor2"];
$aa = $a;
$bb = $b;



echo "Valor de A: ".$a."</br>";
echo "Valor de B: ".$b."</br>";
echo "pos-encremento: </br>";
echo $a++;
echo "</br>";
echo "Valor do A(pos-encremento): </br>";
echo $a;
echo "</br>";
echo "Valor do B(encrementado antes): </br>";
echo ++$b;
echo "</br>";
echo "++++++++++++++++++++++++++++++++++++++++++++++++++++";
echo "</br>";
echo "Valor de A: ".$aa."</br>";
echo "Valor de B: ".$bb."</br>";
echo "</br>";
echo "pos decremento: </br>";
echo $aa--;
echo "</br>";
echo "Valor do A(pos-encremento): </br>";
echo $aa;
echo "</br>";
echo "Valor do B(encrementado antes): </br>";
echo --$bb;
echo "</br>";

echo "</br>";
echo "</br>";
echo "</br>";

$resultado = ($a+$b)/2 > 5 && (10+5) < 3;
var_dump($resultado);
echo "</br>";
$resultado = ($a+$b)/2 > 5 || (10+5) < 3;
var_dump($resultado);

 ?>