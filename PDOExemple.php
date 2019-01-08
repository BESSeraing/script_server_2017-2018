<?php

//1. Je me connecte à la DB
$pdo = new PDO( 'mysql:host=127.0.0.1;port=3307;dbname=script_server_18_19;charset=utf8', 'root', 'root');
//2.JE dis à PDO de renvoyer les erreurs mysql
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);// Uniquement en dev et pas en prod !!!
//3. Je stocke le contenu de la table jeux videos dans la var jeux
$sqlQuery = $pdo->query("SELECT * FROM `jeux_video`");
$jeux = $sqlQuery->fetchAll();


echo '<table>
        <thead>
            <td>id</td>
            <td>nom</td>
            <td>possesseur</td>
            <td>console</td>
            <td>prix</td>
            <td>nbre_joueurs_max</td>
            <td>commentaire</td>
        </thead>
        <tbody>';

foreach ($jeux as $jeu){
    echo '<tr>
        <td>'.$jeu['ID'].'</td>
        <td>'.$jeu['nom'].'</td>
        <td>'.$jeu['possesseur'].'</td>
        <td>'.$jeu['console'].'</td>
        <td>'.$jeu['prix'].'</td>
        <td>'.$jeu['nbre_joueurs_max'].'</td>
            <td>'.$jeu['commentaires'].'</td>
    </tr>';
}

echo '</tbody></table>';

//var_dump($jeux);





