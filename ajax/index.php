<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json"); // Pour me passer du JSON.parse côté JS

$scores=[
    ['player'=>"Gasparino","score"=>1000],
    ['player'=>"Cédric","score"=>2000]//....
];

$score= ["player"=>null,"score"=>null];

if (isset($_POST["player"])){
    $score["player"] = filter_input(INPUT_POST,"player");
}
if (isset($_POST["score"])){
    $score["score"] = filter_input(INPUT_POST,"score");
}

if (null !== $score['score'] && null !== $score['player']){
    //ici on fait la requete PDO pour faire un insert
    $scores[] = $score;
    
}
//ici on fait la requête pour récupérer l'ensemble des score


echo json_encode($scores);


?>

