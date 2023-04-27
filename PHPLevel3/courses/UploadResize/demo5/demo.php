<?php

define ("MAX_SIZE","3000");
function getExtension($str) {
    $i = strrpos($str,".");
    if (!$i) { return ""; }
    $l = strlen($str) - $i;
    $ext = substr($str,$i+1,$l);
    return $ext;
}

$errors=0;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $image =$_FILES["image-1"]["name"];
    $uploadedfile = $_FILES['image-1']['tmp_name'];


    if ($image)
    {

        $filename = stripslashes($_FILES['image-1']['name']);

        $extension = getExtension($filename);
        $extension = strtolower($extension);


        if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
        {
            echo "Unknown Extension..!";
        }
        else
        {

            $size=filesize($_FILES['image-1']['tmp_name']);


            if ($size > MAX_SIZE*1024)
            {
                echo "File Size Excedeed..!!";
            }


            if($extension=="jpg" || $extension=="jpeg" )
            {
                $uploadedfile = $_FILES['image-1']['tmp_name'];
                $src = imagecreatefromjpeg($uploadedfile);

            }
            else if($extension=="png")
            {
                $uploadedfile = $_FILES['image-1']['tmp_name'];
                $src = imagecreatefrompng($uploadedfile);

            }
            else
            {
                $src = imagecreatefromgif($uploadedfile);
                echo $scr;
            }

            list($width,$height)=getimagesize($uploadedfile);


            $newwidth=1000;
            $newheight=($height/$width)*$newwidth;
            $tmp=imagecreatetruecolor($newwidth,$newheight);


            $newwidth1=1000;
            $newheight1=($height/$width)*$newwidth1;
            $tmp1=imagecreatetruecolor($newwidth1,$newheight1);

            imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

            imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);


            $filename = "../images/product-image/Cars/". $_FILES['image-1']['name'];

            $filename1 = "../images/product-image/Cars/small". $_FILES['image-1']['name'];



            imagejpeg($tmp,$filename,100);

            imagejpeg($tmp1,$filename1,100);

            imagedestroy($src);
            imagedestroy($tmp);
            imagedestroy($tmp1);
        }}

}