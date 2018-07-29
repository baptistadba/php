<?php 

$diaDaSemana = date("w");
//$diaDaSemana = 8;

switch ($diaDaSemana) {
	case 0:
		echo "Hoje é Domingo";
		break;
	
	case 1:
		echo "Hoje é Segunda-feira";
		break;
	
	case 2:
		echo "Hoje é Terça-feira";
		break;

	case 3:
		echo "Hoje é Quarta-feira";
		break;
	
	case 4:
		echo "Hoje é Quinta-feira";
		break;

	case 5:
		echo "Hoje é Sexta-feira";
		break;

	case 6:
		echo "Hoje é Sábado";
		break;
	
	default:
		echo "Data Invalida";
		break;
}
 ?>