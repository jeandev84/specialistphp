<?php

// https://stackoverflow.com/questions/18805497/php-resize-image-on-upload


// Example1
$maxDim = 800;
$file_name = $_FILES['myFile']['tmp_name'];
list($width, $height, $type, $attr) = getimagesize( $file_name );
if ( $width > $maxDim || $height > $maxDim ) {
    $target_filename = $file_name;
    $ratio = $width/$height;
    if( $ratio > 1) {
        $new_width = $maxDim;
        $new_height = $maxDim/$ratio;
    } else {
        $new_width = $maxDim*$ratio;
        $new_height = $maxDim;
    }
    $src = imagecreatefromstring( file_get_contents( $file_name ) );
    $dst = imagecreatetruecolor( $new_width, $new_height );
    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
    imagedestroy( $src );
    imagepng( $dst, $target_filename ); // adjust format as needed
    imagedestroy( $dst );
}


// Example2
$result = true;

if($result) {
    $maxDimW = 100;
    $maxDimH = 50;
    list($width, $height, $type, $attr) = getimagesize($_FILES['photo']['tmp_name']);
    if ($width > $maxDimW || $height > $maxDimH) {
        $target_filename = $_FILES['photo']['tmp_name'];
        $fn = $_FILES['photo']['tmp_name'];
        $size = getimagesize($fn);
        $ratio = $size[0] / $size[1]; // width/height
        if ($ratio > 1) {
            $width = $maxDimW;
            $height = $maxDimH / $ratio;
        } else {
            $width = $maxDimW * $ratio;
            $height = $maxDimH;
        }
        $src = imagecreatefromstring(file_get_contents($fn));
        $dst = imagecreatetruecolor($width, $height);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1]);

        imagejpeg($dst, $target_filename); // adjust format as needed
    }
}

move_uploaded_file($_FILES['pdf']['tmp_name'], "pdf/".$_FILES['pdf']['name']);