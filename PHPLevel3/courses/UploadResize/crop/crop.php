<?php

// https://stackoverflow.com/questions/18312243/how-do-i-use-imagick-in-php-resize-crop
$im = new imagick( "img/20130815233205-8.jpg" );
$im->cropThumbnailImage( 80, 80 );
$im->writeImage( "thumb/th_80x80_test.jpg" );
echo '<img src="thumb/th_80x80_test.jpg">';





// Answer 1
$im = new imagick("c:\\temp\\523764_169105429888246_1540489537_n.jpg");
$imageprops = $im->getImageGeometry();
$width = $imageprops['width'];
$height = $imageprops['height'];
if($width > $height){
    $newHeight = 80;
    $newWidth = (80 / $height) * $width;
}else{
    $newWidth = 80;
    $newHeight = (80 / $width) * $height;
}
$im->resizeImage($newWidth,$newHeight, imagick::FILTER_LANCZOS, 0.9, true);
$im->cropImage (80,80,0,0);
$im->writeImage( "D:\\xampp\\htdocs\\th_80x80_test.jpg" );
echo '<img src="th_80x80_test.jpg">';





// Answer 2
/**
 * Resizes and crops $image to fit provided $width and $height.
 *
 * @param \Imagick $image
 *   Image to change.
 * @param int $width
 *   New desired width.
 * @param int $height
 *   New desired height.
 */
function image_cover(Imagick $image, $width, $height) {
    $ratio = $width / $height;

    // Original image dimensions.
    $old_width = $image->getImageWidth();
    $old_height = $image->getImageHeight();
    $old_ratio = $old_width / $old_height;

    // Determine new image dimensions to scale to.
    // Also determine cropping coordinates.
    if ($ratio > $old_ratio) {
        $new_width = $width;
        $new_height = $width / $old_width * $old_height;
        $crop_x = 0;
        $crop_y = intval(($new_height - $height) / 2);
    }
    else {
        $new_width = $height / $old_height * $old_width;
        $new_height = $height;
        $crop_x = intval(($new_width - $width) / 2);
        $crop_y = 0;
    }

    // Scale image to fit minimal of provided dimensions.
    $image->resizeImage($new_width, $new_height, imagick::FILTER_LANCZOS, 0.9, true);

    // Now crop image to exactly fit provided dimensions.
    $image->cropImage($new_width, $new_height, $crop_x, $crop_y);
}



// Answer 3
// Imagick
$image = new Imagick($img);

// method 1 - resize to max width
if($type==1){
    $image->resizeImage($newWidth,0,Imagick::FILTER_LANCZOS,1);
// method 2 - resize to max height
}else if($type==2){
    $image->resizeImage(0,$newHeight,Imagick::FILTER_LANCZOS,1);
// method 1 - resize to max width or height
}else if($type==3){
    if($image->getImageHeight() <= $image->getImageWidth()){
        $image->resizeImage($newWidth,0,Imagick::FILTER_LANCZOS,1);
    }else{
        $image->resizeImage(0,$newHeight,Imagick::FILTER_LANCZOS,1);
    }
// method 4 - resize and crop to center
}else if($type==4){
    if($image->getImageHeight() <= $image->getImageWidth()){
        $image->resizeImage(0,$newheight,Imagick::FILTER_LANCZOS,1);
    }else{
        $image->resizeImage($newwidth,0,Imagick::FILTER_LANCZOS,1);
    }
    $cropWidth = $image->getImageWidth();
    $cropHeight = $image->getImageHeight();

    $image->cropimage(
        $newwidth,
        $newheight,
        ($cropWidth - $newwidth) / 2,
        ($cropHeight - $newheight) / 2
    );
}
