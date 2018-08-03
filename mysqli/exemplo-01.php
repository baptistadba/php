<?php 

$conn = new mysqli("localhost","root","","dbphp7");
if ($conn->connect_error){
	echo "Error: ".$conn->connect_error;

}

$stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha,descricao) values(?,?,?)");

$stmt->bind_param("sss",$login, $senha, $desc);

$login = "4234234";
$senha = "3242353525";
$desc = "adicionado via php.";

$stmt->execute();

$login = "teste2";
$senha = "sswd89";
$desc = "adicionado via php.";

$stmt->execute();

 ?>