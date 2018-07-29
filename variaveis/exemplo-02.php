<?php 

//variaveis 
$pesquisa=$_GET["busca"];
$pesquisa_valor=(int)$_GET["valor"];
var_dump($pesquisa);
echo "</br>";
var_dump($pesquisa_valor);
//http://localhost:91/Treinamento/variaveis/exemplo-02.php?busca=PHP&valor=8974325
echo "</br>";
$ip = $_SERVER['REMOTE_ADDR'];
$caminho = $_SERVER['SCRIPT_NAME'];
var_dump($ip);
echo "</br>";
var_dump($caminho);

 ?>