<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$now_width = 256;
$new_heigth = 256;

//var_dump(getimagesize($file));
//$data = getimagesize($file);

//$width = $data[0];
//$heigth = $data[1];

list($old_width, $old_heigth) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_heigth);
$old_image = imagecreatefromjpeg($file);


imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_heigth, $old_width, $old_heigth);
imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);


?>