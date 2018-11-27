<?php

//Si pas de filter input, l'user peut mettre une balise <script> dans l'input et potentiellement executer du js a distance
$userName = filter_input(INPUT_POST,'userName',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($userName !== null){
    echo "Hello ".$userName;
}

echo '<form action="" method="post"><input type="text" name="userName"><input type="submit"></form>
';