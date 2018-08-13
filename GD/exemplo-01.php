<?php 

header("Content-Type: image/png");

$image = imagecreate(256,256);
							//image,reg,green,blue
$black = imagecolorallocate($image,0,0,0);
$red = imagecolorallocate($image,255,0,0);

//image,font,x,y,string,color
imagestring($image,5,100,120,"teste",$red);

imagepng($image);

imagedestroy($image);

 ?>