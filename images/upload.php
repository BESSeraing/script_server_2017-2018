<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fichier">
    <input type="submit" >
</form>

<?php
echo '<pre>';
var_dump($_FILES);
echo '</pre>';


if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] ===0){
    echo 'fichier bien uploadé <br>';
    $sizeLimit = 1000000; //Un million d'octets = 1Mo
    if ($_FILES['fichier']['size'] <= $sizeLimit){
        $acceptedExtensions = ['jpg','png','gif'];

        $uploadedPathInfo = pathinfo($_FILES['fichier']['name']);
//        var_dump($uploadedPathInfo); //Décommenter pour voir ce que retourne parthinfo
        $uploadedExtension = $uploadedPathInfo['extension'];

        if (in_array($uploadedExtension,$acceptedExtensions)){
            move_uploaded_file($_FILES['fichier']['tmp_name'],__DIR__.'/'.$_FILES['fichier']['name']);
        }
        else{
            echo 'extension '.$uploadedExtension.' pas acceptée <br>';
        }

    }
    else{
        echo 'fichier trop gros<br>';
    }




}
