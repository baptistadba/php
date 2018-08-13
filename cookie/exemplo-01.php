<?php 

//criando um cookie

$data = array(
	"empresa"=>"XISD-2D",
	"email"=>"XISD-2D@uol.com.br",
	"situacao"=>"exemplo"
);

setcookie("NOME_DO_COOKIE",json_encode($data),time()+3600);
echo "OK, Cookie Criado.";


 ?>