<?php 
//insert

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha,descricao) VALUES(:LOGIN,:PASSWORD,:DESCRICAO)");


$login = "JRABDF" ;
$password = "4654654	" ;
$desc ="por php" ;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":DESCRICAO",$desc);

$stmt->execute();
echo "Inserido OK!";

 ?>