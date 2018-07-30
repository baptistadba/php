<?php 
//Novos recursos do PHP7
//no final da declaracao da funçao podemos converter para um tipo especifico.
function soma(float ...$valores):string
{
	return array_sum($valores);
}

echo soma(1,9);
echo "</br>";
echo soma(2,18);
echo "</br>";
echo soma(3,27);
echo "</br>";
echo soma(4,36);
echo "</br>";
echo soma(5,45);
echo "</br>";
echo soma(6.50,54.50);
echo "</br>";
echo soma(6.50,54.50,85.50,90,8.75);
echo "</br>";

var_dump(soma(6.50,54.50,85.50,90,8.75));
 ?>