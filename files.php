<?php

$directory = __DIR__."/files/";//__DIR__ renvoie systématiquement le dossier courant

$fileName = $directory."compteur.txt";

if (is_dir($directory)){
    file_put_contents($fileName,time());    
}
else{
    mkdir($directory);
    file_put_contents($fileName,time());
}


file_put_contents($directory."image.jpg",file_get_contents("https://sdz-upload.s3.amazonaws.com/prod/users/avatars/Mathieu_Nebra-2.jpg"));

echo file_get_contents($fileName);