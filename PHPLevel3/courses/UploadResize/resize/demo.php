<?php
/*
QueryString-driven image handler/resizer, based on the following GET parameters:
    - url   :   image url [required]
    - w     :   new MAX width [optional]
    - h     :   new MAX height [optional]
    - bg    :   background color for the image frame for mode > 0 (see below) [optional w/default]
                - 456FE2 (6 hex digits: can handle upper and lower cases) - DEFAULT: 000000 (black)
    - mode  :   enum corresponding to resize mode type [optional w/default]
                - 0 (default)   : proportional resize (mantaining h/w ratio) with best-fit crop
                - 1     : proportional resize with center padding (using background color)
*/

$url=(!empty($_GET["url"]))?$_GET["url"]:null;
$w=(!empty($_GET["w"]))?$_GET["w"]:null;
$h=(!empty($_GET["h"]))?$_GET["h"]:null;
$bg=(!empty($_GET["bg"]))?$_GET["bg"]:"000000";
$mode=(!empty($_GET["mode"]))?$_GET["mode"]:0;

// die if required parameters are not present
if (empty($url)) { die("ERROR: Missing image url.");exit; }

// prevent path traversal hacks
$url=str_replace("\\","/",$url);
$url=str_replace("../","",$url);
$url=str_replace("./","/",$url);
$path = "/www/website/images/".$url;

// open the image with Imagick (or die if can't)
if ($path==="") { die("ERROR: path not found.");exit; }
$image = new Imagick();
$image->readImage($path);
if ($image===false) { die("ERROR: Unable to open image.");exit; }

if (!empty($w) || !empty($h))
{
    if (empty($w)) $w = round($h * ($image->getImageWidth() / $image->getImageHeight()));
    if (empty($h)) $h = round($w * ($image->getImageHeight() / $image->getImageWidth()));

    switch($mode)
    {
        case 0:
        default:
            $image->cropThumbnailImage($w, $h);
            break;
        case 1:
            $image->setImageBackgroundColor("#$bg");
            $image->thumbnailImage($w, $h, true, true);
            break;
    }
}

// add the "Content-type" header
header('Content-type: image/jpeg');

// add a "Expires" header with an offset of 24 hours
$offset = 3600 * 24;
$expire = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
header($expire);

// add a "Cache-control" header
header("Cache-Control: max-age=3600, must-revalidate");

// Set the image format to JPEG and enable compression
$image->setImageFormat("jpeg");
$image->setImageCompression(Imagick::COMPRESSION_JPEG);

// Set compression level (1 lowest quality, 100 highest quality)
$image->setImageCompressionQuality(90);

// Strip out unneeded meta data
$image->stripImage();

echo $image;
exit;

?>


<div class="row">

    <div class="col-md-4">
        <img class="img-rounded img-responsive" src="<?php echo $uploadPath."thump_".$resizeFileName.'.'. $fileExt; ?>" width="<?php echo $new_width; ?>" height="<?php echo $new_height; ?>" >

        <h4><b>Thump Image</b></h4>

        <a href="<?php echo $uploadPath."thump_".$resizeFileName.'.'. $fileExt; ?>" download class="btn btn-danger"><i class="fa fa-download"></i> Download </a href="">
    </div>
    <div class="col-md-8">
        <img class="img-rounded img-responsive" src="<?php echo $uploadPath.$resizeFileName.'.'. $fileExt; ?>" >

        <h4><b>Original Image</b></h4>
    </div>
</div>
