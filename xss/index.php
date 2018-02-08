<form method="post" action=""><input type="text" name="toto"><input type="submit"></form>

<?php

$toto = filter_input(INPUT_POST,"toto",FILTER_SANITIZE_STRING);

print_r($toto);
