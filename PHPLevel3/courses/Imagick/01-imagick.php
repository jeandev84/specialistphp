<?php


// Example 1
// Create a new Imagick object
$imagick = new Imagick('https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-13.png');

// Resize the image
$imagick->resizeImage(620, 300, Imagick::FILTER_LANCZOS, 1);

// Display the image
header("Content-Type: image/png");
echo $imagick->getImageBlob();



// Example 2
function resizeImage($image_path, $width, $height, $filterType, $blur, $bestFit, $cropZoom)
{
    //The blur factor where &gt; 1 is blurry, &lt; 1 is sharp.
    $imagick = new \Imagick(realpath($image_path));

    $imagick->resizeImage($width, $height, $filterType, $blur, $bestFit);

    $cropWidth = $imagick->getImageWidth();
    $cropHeight = $imagick->getImageHeight();

    if ($cropZoom) {
        $newWidth = $cropWidth / 2;
        $newHeight = $cropHeight / 2;

        $imagick->cropimage(
            $newWidth,
            $newHeight,
            ($cropWidth - $newWidth) / 2,
            ($cropHeight - $newHeight) / 2
        );

        $imagick->scaleimage(
            $imagick->getImageWidth() * 4,
            $imagick->getImageHeight() * 4
        );
    }


    header("Content-Type: image/jpeg");
    echo $imagick->getImageBlob();
}