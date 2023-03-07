<?php

require_once '../business.php';

$db = get_db();

$allowedImgTypes= array("jpg","png");

$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUploadName"]["name"]);


$resultCode=0;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if (filesize($_FILES['fileToUploadName']['tmp_name']) > 1048576 || $_FILES["fileToUploadName"]["error"] == 1) {
  $resultCode=1;
}

if(isset($_POST["submit"])) {
    if(!in_array($fileType, $allowedImgTypes)) {
        $resultCode=2;
    }
    else if(!@is_array(getimagesize($_FILES["fileToUploadName"]["tmp_name"]))){
        $resultCode=6;
    } 
}


// Check if file already exists
if (file_exists($target_file)) {
    $resultCode=3;
}


// Check if $uploadOk is set to 0 by an error
if ($resultCode == 0) {
  if (!move_uploaded_file($_FILES["fileToUploadName"]["tmp_name"], $target_file)) {
   $resultCode=5;
  } else {

    $fileDbObject = [
      'imageName' => $_POST['imageName'],
      'fileName' => $_FILES['fileToUploadName']['name'],
      'authorName' => $_POST['authorName'],
    ];

    $db->files->insertOne($fileDbObject);

    $miniImageTrueColor = imagecreatetruecolor(200, 125);
    if($fileType=="jpg"){
        $miniImage = imagecreatefromjpeg($target_file);
        $watermarkImage = imagecreatefromjpeg($target_file);
    }else{
        $miniImage = imagecreatefrompng($target_file);
        $watermarkImage = imagecreatefrompng($target_file);
    }

    list($width, $height) = getimagesize($target_file);
    imagecopyresampled($miniImageTrueColor,$miniImage, 0, 0, 0, 0, 200, 125, $width, $height);
    $color = imagecolorallocate($watermarkImage, 187, 62, 3);
    putenv('GDFONTPATH=' . realpath('.'));
    $font = "font";
    imagettftext($watermarkImage, 30, 45, 380, 400, $color,$font, $_POST['watermarkValue']);
    if($fileType=="jpg"){
        imagejpeg($miniImageTrueColor, "files/mini-".$_FILES["fileToUploadName"]["name"]."",100);
        imagejpeg($watermarkImage, "files/watermark-".$_FILES["fileToUploadName"]["name"]."",100);
    }else{
        imagepng($miniImageTrueColor, "files/mini-".$_FILES["fileToUploadName"]["name"]."",9);
        imagepng($watermarkImage, "files/watermark-".$_FILES["fileToUploadName"]["name"]."",9);
    }

  }
}


header( "Location: wrzucanie-pliku?resultcode=".$resultCode);
?>
