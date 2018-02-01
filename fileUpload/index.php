<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 1/02/18
 * Time: 15:17
 */

$fileSizeEnMega = 2;
$maxFileSize = $fileSizeEnMega *1000000;

$allowedExtensions = ['jpg'=>"image/jpeg",'jpeg'=>"image/jpeg",'png'=>"image/png",'gif'=>"image/gif"]; 


if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0){
    if ($_FILES['avatar']['size'] <= $maxFileSize){
        $pathInfo = pathinfo($_FILES['avatar']['name']);
//        print_r($pathInfo);
//        print_r(mime_content_type($_FILES['avatar']['tmp_name']));
        $extension = $pathInfo['extension'];
        if (array_key_exists($extension,$allowedExtensions) && mime_content_type($_FILES['avatar']['tmp_name']) == $allowedExtensions[$extension]){
            //On peut uploader
            $uploadedFilePath = './images/'.time().'.'.$extension;
            move_uploaded_file($_FILES['avatar']['tmp_name'],$uploadedFilePath);
            showImg($uploadedFilePath);
        }
        else{
            echo 'fichier pas autorisé';
        }
        
        
    
    }
    else{
        echo 'fichier trop gros';
    }
    
    
    
}

showForm();

function showImg($filePath){
    echo '<img src="fileUpload/'.$filePath.'" />';
}



function showForm(){
    echo '<form action="" enctype="multipart/form-data" method="post">
<input type="file" name="avatar" id="avatar"><label for="avatar">Pousse ton fichier</label>
    <input type="submit" value="envoyer" />
</form>
';
}