<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 30/11/17
 * Time: 15:23
 */
function displayMenuLangues($langues){
    echo '<ul>';
    foreach ($langues as $langue){
        echo '<li><a href="?lang='.$langue['id'].'">'.$langue['name'].'</a></li>';
    }
    echo '</ul>';
}
function displayMenu($pages){
    echo '<nav>';
    echo '<ul>';
    foreach($pages as $page){
        echo '<li><a href="?id='.$page['id'].'">'.$page['name'].'</a></li>';
    }
    echo '</ul></nav>';
}


function displayContent($page){
    echo '<p>'.$page['content'].'</p>';
}