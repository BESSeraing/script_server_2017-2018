<?php
header('Content-Type:image/jpeg');

/**
 * Watermark
 */
//$image = imagecreate(200,50);

$source = imagecreatefrompng('./images/logo.png');
$destination = imagecreatefromjpeg('./images/evil-kid.jpg');

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image

$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);

//En bas à droite
$destination_x = $largeur_destination - $largeur_source;
$destination_y =  $hauteur_destination - $hauteur_source;

//au milieu
$destination_x = ($largeur_destination - $largeur_source) / 2;
$destination_y = ($hauteur_destination - $hauteur_source) / 2;

// On met le logo (source) dans l'image de destination (la photo)
imagecopymerge($destination, $source, $destination_x, $destination_y, 0, 0, $largeur_source, $hauteur_source, 60);


//imagejpeg($evilKid,'./images/evil-kid2.jpg');
imagejpeg($destination);


/**
 * Miniatures
 */
//$source = imagecreatefromjpeg('./images/evil-kid.jpg');
//$destination = imagecreatetruecolor(200,200);
//
//$largeur_source = imagesx($source);
//$hauteur_source = imagesy($source);
//
//$largeur_destination = imagesx($destination);
//$hauteur_destination = imagesy($destination);
//
//$sourceRatio = $largeur_source / $hauteur_source;
//$destRatio = $largeur_destination/$hauteur_destination;
//
//
//
//$divider = $hauteur_source/$hauteur_destination;
//$newLargeur = $largeur_source / $divider;
//
//
//imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source , $hauteur_source);
//
//imagejpeg($destination);