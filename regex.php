<?php
$pattern = "#^[^aeiouy]+$#";
echo '<h1>Test s\'il n\'y a que des consonnes</h1>';

echo '<form action="">';
echo '<input type="text" name="inputText" />';
echo '<input type="submit" />';
echo '</form>';


$inputText = filter_input(INPUT_GET,'inputText');
if ($inputText !== null && preg_match($pattern,$inputText)){
    echo $inputText." - > MATCH !";
}
else if($inputText !== null) {
    echo $inputText." - > NO MATCH";
}

