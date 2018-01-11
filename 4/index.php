<?php
session_start();
include_once "view/displayFunctions.php";

if (isset($_GET['logout'])){
    session_destroy();
    header('Location: /');
}
if (isUserLogged()){
    displayProtectedContent();
}
else{
    if (isFormSubmitted()){
        displayWrongCredentials();
    }
    displayForm();
}



function isFormSubmitted(){
    return count($_POST);
}

function isUserLogged(){
    if (sessionExists()){
        return true;
    }
    $login = 'IPEPS';
    $pass = "p@55w0rd";
    
    if (isset($_POST['login']) && isset($_POST['password'])){
        if ($_POST['login'] === $login && $_POST['password'] === $pass){
            addSessionToken();
            return true;
        } 
    }   
    
    return false;
}




function sessionExists(){
   return isset($_SESSION['token']);
}

function addSessionToken(){
    $_SESSION['token'] =   uniqid();
}