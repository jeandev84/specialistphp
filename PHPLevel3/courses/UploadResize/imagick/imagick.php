<?php

$image = new Imagick();
$image_filehandle = fopen('some/file.jpg', 'a+');
$image->readImageFile($image_filehandle);

$image->scaleImage(100,200,FALSE);

$image_icon_filehandle = fopen('some/file-icon.jpg', 'a+');
$image->writeImageFile($image_icon_filehandle);