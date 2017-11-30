<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 30/11/17
 * Time: 15:24
 */

function getPages(){
    return [
      ['id'=>1,'name'=>'contact',"content"=>'contactContent'],
      ['id'=>2,'name'=>'profile',"content"=>'profileContent'],
      ['id'=>5,'name'=>'home',"content"=>'Contenu de Home'],
      ['id'=>8,'name'=>'login',"content"=>'Contenu de login'],
      ['id'=>12,'name'=>'about_us',"content"=>'Contenu d\'about us'],
        
    ];
}

function getPageById($id){
    foreach (getPages()as $page){
        if ($page['id']==$id){
            return $page;
        }
    }
    return null;
}