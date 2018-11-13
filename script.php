<?php

//$name = "Jona";
//$age = 38;
//$isStudent = false;
//
//
////echo $name.' '.$age;
//
////Loops
//$fruits = ["pomme","poire","fraise"];
//$i =0;
//while($i<count($fruits)){
//    echo $fruits[$i].'<br>';
//    $i++;
//}
//for($n=0;$n<count($fruits);$n++){
//    echo $fruits[$n].'<br>';
//}
//
//foreach ($fruits as $fruit){
//    echo $fruit.'<br>';
//}

//Tableaux associatifs
$vCard = [
    'email'=>"jonathan.cambier@gmail.com",
    'lastName'=>'Cambier',
    'firstName'=>"Jonathan"
];

foreach ($vCard as $vCardElement){
    echo $vCardElement.'<br>';
}

foreach ($vCard as $key => $vCardElement){
    echo $key .' : '.$vCardElement.'<br>';
}

print_r($vCard);

var_dump($vCard);


