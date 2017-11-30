<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 23/11/17
 * Time: 14:25
 */

include 'functions.php';
include 'displayFunctions.php';
//tapeDansLesMains(20);

$eleves = getEleves();
//niceDump($_GET); 
// parametres de requetes get sont stockés dans  superglobal $_GET;
// SG : disponible partout, se comporte comme un array, est remplie/Définie par PHP.

if (isset($_GET['id'])){ // A-t-on reçu un paramètre de requête qui a le nom 'id' isset pour "is set ?"
    $eleveToShow = getEleveById($_GET['id']); // On récupère un élève par son ID
    if (null === $eleveToShow){ // Si pas d'élève correspondant
        displayStudentNotFound();
    }
    else{ //Sinon on affiche l'élève
        displayStudent($eleveToShow); 
    }
}

//Dans tous les cas on affiche la liste des élèves
displayStudentList($eleves);


