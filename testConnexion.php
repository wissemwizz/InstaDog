<?php
require('connexion.php');

$connexion_obj = new Connexion();

$connexion = $connexion_obj->getConnexion();

if($connexion != null) {

    echo " Ouai c'est ça! Tout fonctionne bien mais ne la ramène pas trop pour l'instant !";

//    echo $connexion_obj->insertUser("Paul", "Hemique", "Polémique24", "tartempion", "2019.02.04");
    
    // echo $connexion_obj->getDog($id);

    echo "</pre>";
}   
else {
    echo "MAIS QU'EST-CE QUE TU FOUT??? ta connexion BD a échouée";

  }

?>