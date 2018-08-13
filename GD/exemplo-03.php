<?php 

$image = imagecreatefromjpeg("certificado.jpg");
				//image,red,green,blue
$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image,100,100,100);
$white = imagecolorallocate($image,255,255,255);

$font1 = __DIR__ . DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Knewave".DIRECTORY_SEPARATOR."Knewave-Regular.ttf";
$font2 = __DIR__ . DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Reem_Kufi".DIRECTORY_SEPARATOR."ReemKufi-Regular.ttf";
$font3 = __DIR__ . DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Ranga".DIRECTORY_SEPARATOR."Ranga-bold.ttf";

//echo $font1."</br>";
//echo $font2."</br>";
//echo $font3."</br>";
//image,tamnho_fonte,angulo,x,y,cor,caminho da fonte,string
imagettftext($image,64,0,220,200,$titleColor,$font2,"CERTIFICADO");

imagettftext($image,32,0,360,240,$titleColor,$font2,utf8_decode("Ação Humana"));
imagettftext($image,20,0,320,280,$titleColor,$font2,utf8_decode("Escola de Economia Austriaca"));
imagettftext($image,12,0,420,350,$gray,$font3,"Ludwig Von Mises");
imagettftext($image,14,30,825,550,$white,$font1,"Aprovado");
imagettftext($image,12,0,650,620,$titleColor,$font3,utf8_decode("Concluído em: ").date("d/m/Y"));


header("Content-Type: image/jpeg");

//mostra a imagem
imagejpeg($image);

//gera o arquivo
//imagejpeg($image,"certificado_personalizado".date("Y-m-d")."jpeg",90);
imagedestroy($image);

 ?>