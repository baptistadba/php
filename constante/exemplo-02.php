<?php 

define("BANCO_DE_DADOS",[
'127.0.0.1',
'root',
'password',
'teste'
]
);

print_r(BANCO_DE_DADOS);
echo "</br>";
var_dump(BANCO_DE_DADOS);
echo "</br>";
echo json_encode(BANCO_DE_DADOS);

 ?>