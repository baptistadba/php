<?php 

$a = 30;
$b = 55;

echo "O valor de A é: ".$a."</br>";
echo "O valor de B é: ".$b."</br>";
echo "O valor de A é maior que b: "."</br>";
var_dump($a>$b);
echo "</br>";

echo "O valor de A é menor que b: "."</br>";
var_dump($a<$b);
echo "</br>";
echo "</br>";

echo "O valor de A recebe b: "."</br>";
var_dump($a=$b);
echo "</br>";

echo "O valor de A é: ".$a."</br>";

echo "O valor de A é igual a b: "."</br>";
var_dump($a==$b);
echo "</br>";

echo "O valor e o tipo de A é igual ao b: "."</br>";
var_dump($a===$b);
echo "</br>";
echo "</br>";

echo "O valor de A diferente do b: "."</br>";
var_dump($a!=$b);
echo "</br>";

echo "O valor e o tipo de A é diferente ao b: "."</br>";
var_dump($a!==$b);
echo "</br>";
echo "</br>";


echo 'spaceship: '.'</br>';
echo 'O valor de $a é igual que $b: '.'</br>';
$a=30;
$b=20;
echo "O valor de A é: ".$a."</br>";
echo "O valor de B é: ".$b."</br>";
var_dump($a<=>$b);
echo "</br>";
echo "O valor 1 indica que A é maior. 0 indica que sao iguais. -1 que B é maior. Exclusivo PHP 7.";



 ?>