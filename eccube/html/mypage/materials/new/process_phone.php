<?php

error_reporting(0);


 // The file
$filename = $_GET["path_name"];
 $percent = 0.5;
 $imageString = file_get_contents($filename);

$source = imagecreatefromstring($imageString);
$mask = imagecreatefrompng( '../../../user_data/packages/default/img/items/phone.png' );
// Apply mask to source
imagealphamask( $source, $mask );
// Output
header( "Content-type: image/png");
imagejpeg( $source, "my_phone.jpg" );

function imagealphamask( &$picture, $mask ) {
	// Get sizes and set up new picture
	$xSize = imagesx( $mask ) * 0.5;
	$ySize = imagesy( $mask ) * 0.5;
	$newPicture = imagecreatetruecolor( $xSize, $ySize );
	imagesavealpha( $newPicture, false );
	imagefill( $newPicture, 0, 0, imagecolorallocatealpha( $newPicture, 203, 203, 203, 0 ) );

	// Resize mask if necessary
	if( $xSize != imagesx( $mask ) || $ySize != imagesy( $mask ) ) {
		$tempPic = imagecreatetruecolor( $xSize, $ySize );
		imagecopyresampled( $tempPic, $mask, 0, 0, 0, 0, $xSize, $ySize, imagesx( $mask ), imagesy( $mask ) );
		imagedestroy( $mask );
		$mask = $tempPic;
	}

	// Perform pixel-based alpha map application
	for( $x = 0; $x < $xSize; $x++ ) {
		for( $y = 0; $y < $ySize; $y++ ) {
			$alpha = imagecolorsforindex( $mask, imagecolorat( $mask, $x, $y ) );
			$alpha = 127 - floor( $alpha[ 'red' ] / 2 );
			$color = imagecolorsforindex( $picture, imagecolorat( $picture, $x, $y ) );
			imagesetpixel( $newPicture, $x, $y, imagecolorallocatealpha( $newPicture, $color[ 'red' ], $color[ 'green' ], $color[ 'blue' ], $alpha ) );
		}
	}

	// Copy back to original picture
	imagedestroy( $picture );
	$picture = $newPicture;
}