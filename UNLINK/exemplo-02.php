<?php 

if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
	if (!in_array($item , array(".",".."))){
	//apaga todos os arquivos dentro da pasta
	unlink("images/" . $item);

	}

}

echo "OK";

 ?>