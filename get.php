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

// --> https://media1.tenor.com/images/9edb3d1be26f97abdbff5110b8695aba/tenor.gif?itemid=5191901
$page = array_values(
            array_filter( 
                $menu,
                function($menuElement) use ($pageUrl) {
                    return $menuElement['url'] == $pageUrl;
                }
                )
            );
//Cette façon est juste pour rire. La première version est plus lisible.
if (count($page)){
    echo '<h1>'.$page[0]['name'].'</h1>';
    echo '<p>'.$page[0]['content'].'</p>';
}









