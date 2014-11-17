<?php

error_reporting(0);


 // The file
$filename = $_GET["path_name"];
 $percent = 0.5;

$imageString = file_get_contents($filename);
// Content type
//header('Content-Type: image/jpeg');

// Get new dimensions
list($width, $height) = getimagesize($filename);
$new_width = $width * $percent;
$new_height = $height * $percent;
$dest = imagecreatefromjpeg("../../../user_data/packages/default/img/items/bag.jpg");
// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromstring($imageString);

//imagecopyresampled($dest, $image, 670, 480, 0, 0, $new_width, $new_height, $width, $height);
// Resize
if ($new_width <= 200) {
	if($new_height <= 200){
		imagecopyresampled($dest, $image, 710, 1000, 0, 0, 100, $new_height/2, $width, $height);
	}
	else if($new_height <= 400){
		imagecopyresampled($dest, $image, 710, 1000, 0, 0, 100, $new_height/2, $width, $height);
	}
	else if($new_height <= 600){
		imagecopyresampled($dest, $image, 710, 1000, 0, 0, 100, $new_height/3, $width, $height);
	}
	else{
		imagecopyresampled($dest, $image, 710, 1000, 0, 0, 100, $new_height/3, $width, $height);
	}
}
else if($new_width <= 400 ){
	if($new_height <= 200){
		imagecopyresampled($dest, $image, 680, 920, 0, 0, 150, $new_height/2, $width, $height);
	}
	else if($new_height <= 400){
		imagecopyresampled($dest, $image, 680, 920, 0, 0, 150, $new_height/2, $width, $height);
	}
	else if($new_height <= 600){
		imagecopyresampled($dest, $image, 680, 920, 0, 0, 150, $new_height/2, $width, $height);
	}
	else{
		imagecopyresampled($dest, $image, 680, 920, 0, 0, 150, $new_height/3, $width, $height);
	}
}
else if($new_width <= 600 ){
	if($new_height <= 200){
		imagecopyresampled($dest, $image, 570, 480, 0, 0, 250, $new_height, $width, $height);
	}
	else if($new_height <= 400){
		imagecopyresampled($dest, $image, 570, 480, 0, 0, 250, $new_height, $width, $height);
	}
	else if($new_height <= 600){
		imagecopyresampled($dest, $image, 570, 480, 0, 0, 250, $new_height, $width, $height);
	}
	else{
		imagecopyresampled($dest, $image, 550, 480, 0, 0, 250, $new_height/3, $width, $height);
	}
}
else{
	if($new_height <= 200){
		imagecopyresampled($dest, $image, 470, 480, 0, 0, 600, $new_height, $width, $height);
	}
	else if($new_height <= 400){
		imagecopyresampled($dest, $image, 470, 480, 0, 0, 600, $new_height, $width, $height);
	}
	else if($new_height <= 600){
		imagecopyresampled($dest, $image, 470, 480, 0, 0, 600, $new_height, $width, $height);
	}
	else{
		imagecopyresampled($dest, $image, 470, 580, 0, 0, 600, $new_height-($new_height/3), $width, $height);
	}
}
// Output
$quality = 90;
imagejpeg($dest, "my_bag.jpg");


