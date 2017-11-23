<?php

//Tableau classique
$myArray = [1,2,3,4,5,6,7,8,9];

//Tableau associatif
$myAssociativeArray = [
    "nom"=>'Cambier',
    "prenom"=>"Jonathan"
];

foreach ($myArray as $myArrayElement){
    echo $myArrayElement.'<br>';
}

foreach ($myAssociativeArray as $myAssociativeArrayElement){
    echo $myAssociativeArrayElement.'<br>';
}

foreach ($myAssociativeArray as $myAssociativeArrayKey => $myAssociativeArrayElement){
    echo $myAssociativeArrayKey.' : '.$myAssociativeArrayElement.'<br>';
}










