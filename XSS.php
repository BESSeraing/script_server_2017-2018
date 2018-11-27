<?php

$userName = filter_input(INPUT_POST,'userName',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($userName !== null){
    echo "Hello ".$userName;
}

echo '<form action="" method="post"><input type="text" name="userName"><input type="submit"></form>
';