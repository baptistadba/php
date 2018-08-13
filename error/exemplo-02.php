<?php 

//mostra erro, mas nao mostra notice.
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

 ?>