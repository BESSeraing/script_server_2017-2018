<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 22/02/18
 * Time: 14:58
 */


if (isFormSubmitted()){
    $phoneNumber = filter_input(INPUT_POST,"phone");
    if (isPhoneNumberValid($phoneNumber)){
        printSuccess();
    }
    else{
        printFailed();
    }
}
showForm();



function printFailed(){
    echo 'looser';
}

function printSuccess(){
    echo "veel success";
}

function isPhoneNumberValid($phoneNumber){
    $pattern = "#.+#";
    return preg_match($pattern,$phoneNumber);
}

function isFormSubmitted(){
    return isset($_POST['phone']);
}


function showForm(){
    echo '<form action="" method="post">
            <input type="text" name="phone">
            <input type="submit">
            </form>';    
}