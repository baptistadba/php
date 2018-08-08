<?php 

$dir1 = "folder_01";
$dir2 = "folder_02";
//cria o diretorio 1, caso ele nao exista
if (!is_dir($dir1)) mkdir($dir1);
//cria o diretorio 2, caso ele nao exista
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

//Cria um arquivo na pasta dir 1 caso e ele nao exista e adiciona a data e hora
if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){

	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename , "w+");

	fwrite($file, date("Y-m-d H:i:s"));

}

//move o arquivo de pasta.
rename($dir1 . DIRECTORY_SEPARATOR . $filename ,//Origem
	 $dir2 . DIRECTORY_SEPARATOR . $filename)//Destino


 ?>