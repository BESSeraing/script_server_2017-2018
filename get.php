<?php
$menu = [
    ['url'=>"home",'name'=>'Accueil',"content"=>"Le contenu de la homePage"],
    ['url'=>"about",'name'=>'About',"content"=>"Ceci est le contenu sur moi-même"],
    ['url'=>"contact",'name'=>'Contact',"content"=>"Ceci est sensé être un formulaire de contact"],
    ['url'=>"funny",'name'=>'funny',"content"=>"LOL"]
];


foreach ($menu as $menuElement){
    echo '<li><a href="?page='.$menuElement['url'].'">'.$menuElement['name'].'</a></li>';
}


$pageUrl = 'home';
if (isset($_GET['page'])){
    $pageUrl = $_GET['page'];
}
$page = findPage($menu,$pageUrl);
if ($page !== null){
    echo '<h1>'.$page['name'].'</h1>';
    echo '<p>'.$page['content'].'</p>';
}


function findPage($menu,$url){
    foreach ($menu as $menuElement){
        if ($menuElement['url'] === $url){
            return $menuElement;
        }
    }
    return null;
}






