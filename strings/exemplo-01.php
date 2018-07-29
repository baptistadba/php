<?php 

echo "Strings.</br>";

$programa= "Ts23-df";
$versao = 'v2.1.3';



echo "Programa: $programa.</br>";
echo "Usar as aspas duplas possibilita usar o valor da variavel diretamente dentro do echo. Fazendo uma busca e verificando se tem alguma variavel dentro do codigo.";
echo "</br>";
echo 'Versao: $version'."</br>";
echo "Aspas simples nao permitem.Pois buscam o nome da variavel.";
echo "</br>";


$var1="teste";
$var2="ARQUIVO";
$var3="treinamento online";
$var4="entre aqui";
echo ($var1).'  -  '.strtoupper($var1);
echo "</br>";
echo ($var2).'  -  '.strtolower($var2);
echo "</br>";
echo ($var3).'  -  '.ucwords($var3);
echo "</br>";
echo ($var4).'  -  '.ucfirst($var4);
echo "</br>";

 ?>