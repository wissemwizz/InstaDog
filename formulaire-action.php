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
$instaDogs->insertUser($lastName, $firstName, $userName, $passwordUser, date("Y.m.a"), $mailAdress);
}
else{
echo "Veuillez remplir tous les Champs";
}


?>