<?php 

//escopo de variavel
//obs: Usar o global para ver o conteudo de uma variavel fora da funcao.

$programa = "x32-se";
function teste()
{
	global $programa;
	echo $programa." - Agora no teste 1";
	echo "</br>";

}

function teste2()
{
	echo $programa." - Agora no teste 2";
	echo "</br>";
	$programa="ye23-me";
	echo $programa." - Agora no teste 2. Novamente";
	echo "</br>";
}

teste();
teste2();

 ?>