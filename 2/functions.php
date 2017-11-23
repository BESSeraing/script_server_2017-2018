<?php


function tapeDansLesMains($nombreDeFois){
    $claps = [];
    for($i=0;$i<$nombreDeFois;$i++){
        $claps[] = 'clap'; // Raccourci pour faire un array_push
        //J'aurais pu faire array_push($claps,'clap')
    }
    echo implode(', ',$claps);
}

function getEleves(){
    return [
      ['id'=>0,'prenom'=>'Gasparino','email'=>'gasparino@domain.ltd'],  
      ['id'=>1,'prenom'=>'Aymeric','email'=>'aymeric@domain.ltd'],  
      ['id'=>2,'prenom'=>'Anthony','email'=>'anthony@domain.ltd']        
    ];
}

/**
 * @param $id
 * @return mixed|null
 */
function getEleveById($id){
    $eleves = getEleves();
    foreach ($eleves as $eleve){
        if ($eleve['id'] == $id){
            return $eleve;
        }
    }
    return null;
}



function niceDump($var){
    echo '<pre>'.print_r($var,true).'</pre>';
}