<?php
header("Access-Control-Allow-Origin: http://localhost:63342");
header("Content-Type: application/json");



$scores = [
    ["score"=> 99999999999999,"nom"=>"Jona"],
    ["score"=> 2,"nom"=>"Marco"],
    ["score"=> 2,"nom"=>"Mickael"]
];


echo json_encode($scores);