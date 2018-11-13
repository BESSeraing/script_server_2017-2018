<?php


$menu = [
    ['name'=>'Accueil',"content"=>"Le contenu de la homePage"],
    ['name'=>'About',"content"=>"Ceci est le contenu sur moi-même"],
    ['name'=>'Contact',"content"=>"Ceci est sensé être un formulaire de contact"],
    ['name'=>'funny',"content"=>"LOL"]
];

//echo '<a href="?page=0">'.$menu[0]['name'].'</a>';
//echo '<a href="?page=1">'.$menu[1]['name'].'</a>';
//echo '<a href="?page=2">'.$menu[2]['name'].'</a>';
//La même avec une boucle
for($i =0;$i<count($menu);$i++){
    echo '<a href="?page='.$i.'">'.$menu[$i]['name'].'</a>';
}

$pageIndex = 0;
if (isset($_GET['page'])){
    $pageIndex = $_GET['page'];
}

if (isset($menu[$pageIndex])){
    $page = $menu[$pageIndex];
    echo '<h1>'.$page['name'].'</h1>';
    echo '<p>'.$page['content'].'</p>';
    var_dump($page);
}else{
    echo "<p>Cette page n'existe pas</p>";
}





