<?php
//header("Location: https://google.be");  // C'est comme ça qu'on redirige
session_start(); // Sans ça, rien ne marche.


if (!isset($_SESSION['test'])){ // Si la SESSION['test'] n'est pas définie
    $_SESSION['test'] = time();
}


echo "il est ".time()." et la session a été définie à ".$_SESSION['test']; // Si mon script marche, la valeur ne change pas.



