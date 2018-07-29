<?php 

require_once("config.php");
echo $_SESSION["nome"];
var_dump ($_SESSION);
echo "</br>";
//apaga a variavel nome
session_unset($_SESSION["nome"]);

//LIMPA  todas variaveis de $_SESSION
//session_unset($_SESSION);
echo $_SESSION["nome"];
echo "</br>";
//session_destroy($_SESSION);
var_dump ($_SESSION);
echo "</br>";

 ?>