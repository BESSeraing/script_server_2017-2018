<a href="?lien=1">Lien 1</a>
<a href="?lien=2">Lien 2</a>

<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 30/11/17
 * Time: 13:53
 */
if (isset($_GET['lien'])){
    if ($_GET['lien'] == 1){
        echo 'vous avez cliqué sur le lien 1';
    }
    elseif ($_GET['lien']==2){
        echo 'vous avez cliqué sur le lien 2';
    }    
}
else{
    echo 'Cliquez sur un lien svp';
}




