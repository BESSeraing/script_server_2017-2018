<?php

function displayForm(){
    echo '<form method="POST" action="">
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
        <label for="password">Pass</label>
        <input type="password" name="password" id="password">
        <input type="submit">        
</form>';
}

function displayProtectedContent(){
    echo  '<a href="?logout=1">Logout</a>';
    echo '<img src="http://i0.kym-cdn.com/entries/icons/original/000/021/807/4d7.png"/>';
}

function displayWrongCredentials(){
    echo '<p>MAUVAIS LOGIN!</p>';
}