<?php

function scale_image($image,$target,$target_width,$target_height)
{
    //First we will check the file is empty or not, if is not empty go on
    if(!empty($image))
    {
        $source_image = null;

        $exploded = explode('.',$image);
        $ext = $exploded[count($exploded) - 1];

        //Then decide the image type is jpeg or pgn orgif or bmp and declare the image to the related image.
        if (preg_match('/jpg|jpeg/i',$ext))
            $source_image = imagecreatefromjpeg($image);
        else if (preg_match('/png/i',$ext))
            $source_image = imagecreatefrompng($image);
        else if (preg_match('/gif/i',$ext))
            $source_image = imagecreatefromgif($image);
        else if (preg_match('/bmp/i',$ext))
            $source_image = imagecreatefrombmp($image);

        //get Source image dimensions
        $source_imagex = imagesx($source_image);
        $source_imagey = imagesy($source_image);

        //and Destination image dimensions from parameters of the method.
        $dest_imagex = $target_width;
        $dest_imagey = $target_height;

        //Prepare and copy image.
        $image2 = imagecreatetruecolor($dest_imagex, $dest_imagey);
        imagecopyresampled($image2, $source_image, 0, 0, 0, 0,
            $dest_imagex, $dest_imagey, $source_imagex, $source_imagey);
        //Set the image quality. I set it as 65% also you can set it from another parameter of the method.
        imagejpeg($image2, $target, 65);
    }
}


// First we have to specify the folder which the image will be uploaded. If the folder is not exist we must create that folder. Below code block you will see how to do it:


$target_dir = "../../img/contents/" . date("Y") . '/' . date("m") . '/' . date("d") . '/';
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Here we get the uploaded file name and we removed the extension of the file And then we will combine the folder and target file name and again without the file extension. And here we get the file type to decide it is an image or not. To upload image here we should check the format and if it is not an image we cancel the uploading And we declare the target file path with the extention and file name.


//Here we get the uploaded file name and we removed the extension of the file
$file_base_name = substr($_FILES["fileToUpload"]["name"], 0, strrpos($_FILES["fileToUpload"]["name"], "."));
//And then we will combine the folder and target file name and again without the file extension.
$target_file = $target_dir .  basename($_FILES["fileToUpload"]["name"]) ;
$original_file_name = substr($target_file, 0, strrpos($target_file, "."));
$uploadOk = 1;
//And here we get the file type to decide it is an image or not.
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//To upload image here we should check the format and if it is not an image we cancel the uploading.
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

//And we declare the target file path with the extention and file name.
$target_file = $original_file_name . "." . $imageFileType;

// Our configurations are ready now and we are going to upload the file with the built file path.


if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Image file was uploaded :". basename( $_FILES["fileToUpload"]["name"]) ;
}

/*
Everything is ready now. All we have to do now is to resize and copy the image. Below code block will do it after uploading the image. I will write the code with uploading code below.
*/

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Image file was uploaded :". basename( $_FILES["fileToUpload"]["name"]). " 
 ";

        scale_image($target_file,
            substr($target_file,0,strrpos($target_file, ".")) . "_1024x500" .  "." . $imageFileType,
            1024, 500
        );
}