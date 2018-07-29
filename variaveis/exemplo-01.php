<?php 

$programa='X1-STD1';
echo $programa;
echo '</br>';
echo '</br>';
var_dump($programa);
echo '</br>';
echo '</br>';
//apagar valor da variavel;
unset($programa);
if (isset($programa)) {
	echo "variavel esta com valor indefinido";
	var_dump($programa);
}
var_dump($programa);
echo '</br>';
echo '</br>';
$programa='X1-STD1';
var_dump($programa);
echo '</br>';
echo '============================================';
echo '</br>';
//Tipos de variaveis
//Tipos primitivos
////Tipos basicos;
$versao="Version 1.1";
$version_paralelo='Version 1.1';
$ano=2018;
$bloqueado=false;
$preco=250.50;
////Tipos compostos
$menu = array("Principal","Objetivos","Exemplo","Download","Atividades","Sobre");
echo $menu[3];
echo '</br>';
$dt_liberacao= new DateTime();
var_dump($dt_liberacao);
echo '</br>';
echo '============================================';
echo '</br>';
////Tipos especiais;
$arquivo= fopen("exemplo-01.php","r");
var_dump($arquivo);
$nulo=null;
$vazio="";



 ?>