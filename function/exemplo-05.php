<?php 
//passagem de valor por parametro e referencia.

$a=10;


//PODE SER COM A VARIAVEL A.Porém ela so vale dentro da função.
//
//
// function trocaValor($a)
// {
// 	$a += 50;
// 	return $b;
// }

//passagem por parametro
//function trocaValor($b)
//passagem por referencia. Ou seja muda o valor da variavel que foi passada
function trocaValor(&$b)
{
	$b += 50;
	return $b;
}

echo trocaValor($a);
echo "</br>";
echo trocaValor($a);
echo "</br>";
//aqui chama a variavel que foi definida no inicio do programa.
echo $a;


 ?>