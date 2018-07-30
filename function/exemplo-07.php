<?php 
//Novos recursos do PHP7

//declaracao de tipos escalares
//funcao pode receber n valores e vai tratar como tipo inteiro.
//Funçao fica dinamica.
function soma(int ...$valores)
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
echo soma(6.50,54.50,85.50,90,8.50);
echo "</br>";


 ?>