<?php 
//gerando um thumbnail
header("Content-Type: image/jpeg");

$file = "wallpaper.jpg"; 

$new_width = 256;
$new_height = 256;

list($old_width,$old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width,$new_height);
$old_image = imagecreatefromjpeg($file);

//dest_image,src,dst_x,dst_y,src_x,src_y,dst_w,dst_h,src_w,src_h
imagecopyresampled($new_image,$old_image,0,0,0,0,$new_width,$new_height,$old_width,$old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

 ?>