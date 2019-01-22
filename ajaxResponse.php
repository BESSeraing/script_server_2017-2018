<?php
header("Access-Control-Allow-Origin : http://localhost");
sleep(2);

$user = filter_input(INPUT_GET,"user",FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($user !== null){
    echo 'Bonjour '.$user;
}
else{
    throw new Exception("user should be set");
}
