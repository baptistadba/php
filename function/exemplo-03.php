<?php 

//colocar os parametros obrigatorios no lado esquerdo.
//function ola($texto,$periodo = "Bom dia!!")
function ola($texto = "mundo",$periodo = "Bom dia!!")
{
	return "Olá, $texto!$periodo</br>";
}

echo ola();
echo ola("");
echo ola("Baptista","Boa noite!!");
echo ola("Jesus","Boa Tarde!!");


 ?>