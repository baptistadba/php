<?php 

$images = scandir("images");
//var_dump($images);

$data=array();

foreach ($images as $img) {
		//alvo,opcoes
	if (!in_array($img, array(".",".."))){

		$filename = "images".DIRECTORY_SEPARATOR.$img;
		$info = pathinfo($filename);
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s",filemtime($filename));
		$info["url"] = "http://localhost:91/GIT/PHP/dir/".str_replace("\\","/",$filename);

		array_push($data,$info);

	}
}

echo json_encode($data);


 ?>