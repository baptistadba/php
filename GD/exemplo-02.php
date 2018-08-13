<?php 

$image = imagecreatefromjpeg("certificado.jpg");
				//image,red,green,blue
$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image,100,100,100);

imagestring($image,5,420,200,"CERTIFICADO",$titleColor);
imagestring($image,5,420,215,utf8_decode("Ação Humana"),$titleColor);

imagestring($image,5,420,350,"Ludwig Von Mises",$titleColor);

imagestring($image,3,827,520,"Aprovado",$titleColor);
imagestring($image,2,420,580,utf8_decode("Concluído em: ").date("d/m/Y"),$titleColor);

header("Content-Type: image/jpeg");

//mostra a imagem
//imagejpeg($image);

//gera o arquivo
imagejpeg($image,"certificado_personalizado".date("Y-m-d")."jpeg",90);
imagedestroy($image);

 ?>