<?php
/**
 * Disclaimer : Ceci est un exemple TRES BASIQUE. Il ne doit pas servir de base à une securité pour un site en production.
 *
 */
if (isFormSubmitted()){
    if (isPassAndUserValid()){
        displayContent();
    }
    else{
        displayError();
        displayForm();
    }
}else{
    displayForm();    
}








function isFormSubmitted(){
    return isset($_POST['pseudo'])&& isset($_POST['password']);
}

function isPassAndUserValid(){
    $user = "toto";
    $password = "polux";
    return $_POST['pseudo'] === $user && $_POST['password'] === $password;
}

function displayError(){
    echo '<p style="color:red;">Les données entrées son incorrectes</p>';
}

function displayContent(){
    echo '<p>Ceci est ultra confidentiel</p>';
}

function displayForm(){
    echo '<form method="post">
        <input type="text" name="pseudo" placeholder="pseudo">
        <input type="password" name="password" placeholder="pseudo">
        <input type="submit" >
    </form>';
}