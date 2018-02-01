<form action="" method="POST">
    <input type="text" name="login">
    <input type="text" name="password">
    <input type="submit">
</form>

<?php

if (isFormPosted()){
    echo 'POSTE';
    
    if (areCredentialsOk()){
        echo 'BON LOGIN';
    }
    else{
        echo 'MAUVAIS LOGIN';
    }
    
}
else{
    echo "NON POSTE";
}



function areCredentialsOk(){
    if ($_POST['login'] == 'user' && $_POST['password'] == "pass"){
        return true;
    }
    else{
        return false;
    }
}


function isFormPosted(){
    if (count($_POST) > 0){
        return true;
    }
    else{
        return false;
    }
}

print_r($_POST);