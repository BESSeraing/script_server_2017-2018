<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 30/11/17
 * Time: 15:23
 */

include_once 'model/model.php';
include_once 'lang.php';
include_once 'view/view.php';
$langues = getLangues();
$selectedLang = $langues[0];
$pages = getPages();

displayMenuLangues($langues);
displayMenu($pages);

if (isset($_GET['id'])){
    $page = getPageById($_GET['id']);
    echo $page === null ? 'Page inexistante' : $page['content'];
}