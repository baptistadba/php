<?php 

//http://php.net/manual/pt_BR/function.fopen.php
$file = fopen("log.txt","a+");
fwrite($file,date("Y-m-d H:i:s")."\r\n");

fclose($file);
echo "Arquivo criado com sucesso.";
