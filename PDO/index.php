
<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 8/02/18
 * Time: 15:21
 */

try{
    $db = new PDO('mysql:host=localhost;dbname=php2017-2018;','root','root');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
    die('connection error : '.$e->getMessage());
}

showGameForm();


if (isFormSubmitted() && isFormValid()){
    try{
        $request = 'INSERT INTO `jeux_videos` (`name`,`platform`,`price`) VALUES (:name, :platform, :price)';
        $insert = $db->prepare($request);
        $insert->execute(['name'=>$_POST['name'],'platform'=>$_POST['platform'],'price'=>$_POST['price']]);

    }
    catch(PDOException $e){
        die($e->getMessage());
    }
    
}

/**
 * Truc de base, hackable
 */
//$reponse = $db->query('SELECT * FROM `jeux_videos` WHERE `id`='.$_GET['id']);
/**
 * Truc plus safe
 */
//
//$reponse = $db->prepare('SELECT * FROM `jeux_videos` WHERE `id`=:id');
//
//$reponse->execute(['id'=>$_GET['id']]);


$reponse = $db->prepare('SELECT * FROM `jeux_videos`');
$reponse->execute();



$lines = $reponse->fetchAll();

echo '<table>';
echo '<thead>';
echo '<td>id</td>';
echo '<td>nom</td>';
echo '<td>platforme</td>';
echo '<td>prix</td>';
echo '</thead>';
echo '<tbody>';
foreach ($lines as $line){
    echo '<tr>';
        echo '<td>'.$line['id'].'</td>';
        echo '<td>'.$line['name'].'</td>';
        echo '<td>'.$line['platform'].'</td>';
        echo '<td>'.$line['price'].'</td>';
    echo '</tr>';
}
echo '<tbody>';
echo '</table>';

function showGameForm(){
    echo '<form action="" method="post">
            <input type="text" id="name" name="name">
            <label for="name">name</label>
            <input type="text" id="platform" name="platform">
            <label for="platform">platform</label>
            <input type="number" id="price" name="price">
            <label for="price">prix</label>
            <input type="submit" />
            </form>

';
}


function isFormValid(){
    return true;
}

function isFormSubmitted(){
    if (count($_POST)){
        return true;
    }
    else{
        return false;
    }
    
    //return count($_POST);
}