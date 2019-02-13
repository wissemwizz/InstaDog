<?php


$firstName = $_POST['nomFamille'];
$lastName = $_POST['prenom'];
$userName = $_POST['pseudo'];
$passwordUser= $_POST['pwd'];
$confirmPassword=$_POST['cpwd'];
$mailAdress= $_POST['email'];

require('connexion.instadog.php');
$instaDogs= new Connexion();

if($passwordUser === $confirmPassword){ 
    $id=$instaDogs->insertUser($lastName, $firstName, $userName, $passwordUser, date("Y-m-d"), $mailAdress);
    // AFFICHAGE DIRECTEMENT DANS LA PAGE CONCERNEE
    header('Location:compte.php?id='.$id);
}else{
    echo "Veuillez remplir tous les Champs";
}

?>