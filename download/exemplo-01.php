<?php 

$link = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);
//var_dump($content);
$parse = parse_url($link);
//var_dump($parse);
$basename = (basename($parse["path"]));
//var_dump($basename);
$file = fopen($basename,"w+");

fwrite($file,$content);

fclose($file);

 ?>

 <img src="<?=$basename?>">