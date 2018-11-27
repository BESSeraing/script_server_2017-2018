<?php



var_dump($_POST);
if (isset($_POST['password'])){
    if (strlen($_POST['password'])<8){
        echo 'Mot de passe trop petit';
    }
}

echo '<form action="" method="post">
    <input type="text" name="pseudo" placeholder="Insérez votre pseudo">    
    <input type="password" name="password">
    <textarea name="textareaName" id="textareaId"></textarea>
    <div>
    <input type="radio" name="choix" id="choix1" value="1" ><label for="choix1">Choix 1</label>
<input type="radio" name="choix" id="choix2" value="2"><label for="choix2">Choix 2</label>
<input type="radio" name="choix" id="choix3" value="3"><label for="choix3">Choix 3</label>
<input type="radio" name="choix" id="choix4" value="4"><label for="choix4">Choix 4</label>
</div>
<div>
<input type="checkbox" name="choixAnd[]" id="choixAnd1" value="1"><label for="choixAnd1">choixAnd1</label>
<input type="checkbox" name="choixAnd[]" id="choixAnd2" value="2"><label for="choixAnd2">choixAnd2</label>

</div>
    <div>
    <select name="select[]" id="" multiple>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select>
</div>
    <input type="hidden" name="hideIt" value="hahaha">    
    <input type="submit">    
</form>';

