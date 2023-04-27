<?php

// https://www.w3docs.com/snippets/php/php-resize-image-on-upload.html
// get the dimensions of the original image
$original_image = 'original.jpg';
list($width, $height) = getimagesize($original_image);

// calculate the new dimensions
$new_width = 100;
$new_height = 100;

// create a new image with the new dimensions
$new_image = imagecreatetruecolor($new_width, $new_height);

// copy and resize the image data from the original image into the new image
imagecopyresampled($new_image, $original_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// output the new image as a JPEG file
imagejpeg($new_image, 'resized.jpg');