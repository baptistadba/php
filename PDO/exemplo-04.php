<?php 
//update

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin=:LOGIN, dessenha=:PASSWORD, descricao=:DESCRICAO WHERE idusuario=:ID");


$id = 17 ;
$login = "JOAO" ;
$password = "32154646" ;
$desc ="por php!" ;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":DESCRICAO",$desc);
$stmt->bindParam(":ID",$id);

$stmt->execute();
echo "Atualizado OK!";

 ?>