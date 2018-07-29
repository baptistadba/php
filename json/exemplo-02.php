<?php 

$variavel = '[{"nome":"F2HZ5","cod":25},{"nome": "DSCS2","cod":2}]';

//aqui transforma json em objeto
echo "Json transformado em objeto!!</br>";
$objeto = json_decode($variavel);
var_dump($objeto);

echo "</br></br></br>";

//aqui transforma json em array
echo "Json transformado em array!!</br>";
$array = json_decode($variavel, true);
var_dump($array);

 ?>