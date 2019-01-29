<?php
//$pattern = "#^[^a-z]+$#";
//$pattern = "#^04[6-9][0-9](([ ./]?[0-9]{2}){3})|(([ ./]?[0-9]{3}){2})$#";
$pattern = "#(04[6-9][0-9]((([ ./]?[0-9]{2}){3})|(([ ./]?[0-9]{3}){2})))#";


echo '<h1>Test s\'il n\'y a que des consonnes</h1>';

echo '<form action="">';
//echo '<input type="text" name="inputText" />';
echo '<textarea name="inputText"></textarea> ';
echo '<input type="submit" />';
echo '</form>';


$inputText = filter_input(INPUT_GET,'inputText');
if ($inputText !== null && preg_match_all($pattern,$inputText,$matches)){
    echo $inputText." - > MATCH !";
}
else if($inputText !== null) {
    echo $inputText." - > NO MATCH";
}

echo "___________________________________________________________________________<br>";

echo preg_replace($pattern,"xxxxxxxxxx",$inputText);

//echo '<pre>';
//print_r($matches);
//echo '</pre>';


