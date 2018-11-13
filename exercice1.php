<?php

//PArcours ce tableau pour écrire l'ensemble des prénoms des élèves
$studentFirstNames = ["Eric","Marco","Sébastien","Laura"];


//Parcours ce tableau pour écrire l'ensemble des noms de famille des élèves.
$students = [
    ['firstName'=>"Eric",'lastName'=>"Gony"], 
    ['firstName'=>"Marco",'lastName'=>"SCIMECA"],
    ['firstName'=>"Sébastien",'lastName'=>"MARCIPONT"],
    ['firstName'=>"Laura",'lastName'=>"KUMAR"],
];

//var_dump($students);

echo '<hr>';
//echo $students[2]["lastName"];


foreach ($students as $student){
    var_dump($student['lastName']);
}