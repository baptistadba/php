<?php 


$empresa= array(
	'nome' =>'R2SDR3', 
	'email' => 'R2SDR3@gmail.com', 
	'telefone' => '61-999999999',
	'filiais' => 10
);

//Passagem de valores por parametros
//foreach ($empresa as $value) {
//Passagem de valores por referencia
foreach ($empresa as &$value) {
	if (gettype($value) ==='integer')$value +=3;	
	echo $value."</br>";
}

echo "</br>";
print_r($empresa);


 ?>