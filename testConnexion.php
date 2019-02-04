<?php
require('connexion.php');


$connexion_obj = new Connexion();

$connexion = $connexion_obj->getConnnexion();

if($connexion != null) {

    echo "ok";

   echo $connexion_obj->insertPersonne("Paul", "Hemique", "non definie", "2012-02-02", "marie");


    echo "</pre>";

}   
else {
    echo "connexion BD échouée";

  }

?>