<?php
require('connexion.php');

$instaDogs=     new Connexion();

$firstName=     $_POST['nomFamille'];
$lastName=      $_POST['prénom'];
$userName=      $_POST['pseudo'];
$passwordUser=  $_POST['pwd'];
$confirmPassword=$_POST['cpwd'];
$dateConnect=   $_POST['dateConnect'];
$mailAdress=    $_POST['email'];

if($passwordUser === $confirmPassword){ 
insertUser ($firstName, $lastName, $userName, $passwordUser, $dateConnect, $mailAdress);}
else{
echo "Veuillez remplir tous les Champs";
}



?>