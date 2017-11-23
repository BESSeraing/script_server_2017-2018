<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 23/11/17
 * Time: 14:12
 */

$exclamed = addExclamation('Salut peter'); 
echo $exclamed;


function addExclamation($string){
//    echo $exclamed; Ici la variable n'est pas disponible, car sa portée est limoitée par les functions
// Pour la rendre disponible, pour le moment on va se contenter de la fournir en argument.
 
 
 
    return $string . ' !'; //Quand il y a un return, c'est comme si la function prenait la valeur de ce qu'elle retourne. (voir ligne 9)
    $string = strtolower($string); // Cette ligne ne sera jamais executée, parce que la function a déjà retourné quelque chose.
}

