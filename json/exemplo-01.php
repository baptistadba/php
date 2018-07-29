<?php 

$empresa = array();

array_push($empresa, array(
	'nome' => 'F2HZ5' , 
	'cod' => '25', 
	'email' => 'F2HZ5@admin.com.br', 
	'cidade' =>'Brasilia' , 
	'estado' => 'Distrito Federal', 
	'cnpj' => '789.321554.56'
));

array_push($empresa, array(
	'nome' => 'DSCS2' , 
	'cod' => '2', 
	'email' => 'DSCS2@cad.com.br', 
	'cidade' =>'Brasilia' , 
	'estado' => 'Distrito Federal', 
	'cnpj' => '846.845216.58'
));

echo json_encode($empresa);

 ?>