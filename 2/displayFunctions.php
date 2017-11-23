<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 23/11/17
 * Time: 15:38
 */

function displayStudent($student){
    echo '<dl>';
    echo '<dt>Prenom</dt>';
    echo '<dd>'.$student['prenom'].'</dd>';
    
    echo '<dt>Email</dt>';
    echo '<dd>'.$student['email'].'</dd>';
    echo '</dl>';
}

function displayStudentNotFound(){
    echo '<h1>Cet eleve n\'existe pas ou plus</h1>';
}

function displayStudentList($eleves){ // Le ? dans le href sert à déterminer les paramètres de la requete qui sera envoyée

    echo '<ul>';
    foreach ($eleves as $eleve){
        echo '<li><a href="?id='.$eleve['id'].'">'.$eleve['prenom'].'</a></li>';
    }
    echo '</ul>';
}