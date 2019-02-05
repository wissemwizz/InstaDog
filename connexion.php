<?php

// APPELS SOUS CONNEXION

class Connexion {

    private $connexion;

    public function __construct(){
    
        $PARAM_hote='localhost';
        $PARAM_port='3306';
        $PARAM_nom_bd='InstaDog';
        $PARAM_utilisateur='adminInstadog';
        $PARAM_mot_passe='Inst@D0g';
        
        try{
            
            $this->connexion = new PDO(
                'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe);
            
        }catch(Exception $e){

            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();         
        }
    }

    public function getConnexion(){
        return $this->connexion;
    }

// INSERTION NOUVEL UTILISATEUR

public function insertUser($firstName, $lastName, $userName, $passwordUser, $dateConnect) {

    $requete_prepare = $this->connexion->prepare(
        "INSERT INTO User (firstName, 
                            lastName, 
                            userName, 
                            passwordUser, 
                            dateConnect) 
        values (:firstName, 
                :lastName, 
                :userName, 
                :passwordUser, 
                :dateConnect)"
    );
    $requete_prepare->execute(
        array(  'firstName' => "$firstName", 
                'lastName' => "$lastName", 
                'userName' => "$userName", 
                'passwordUser' => "$passwordUser", 
                'dateConnect' => "$dateConnect"
            )
    );
}

// INSERTION NOUVEAU CHIEN

    public function insertDog($nameDog, $race, $mix, $birthdate, $gender, $image) {

        $requete_prepare = $this->connexion->prepare(
            "INSERT INTO Dog (nameDog, 
                                race, 
                                mix, 
                                birthdate, 
                                gender,
                                imageDog) 
            values (:nameDog, 
                    :race, 
                    :mix, 
                    :birthdate, 
                    :gender,
                    :imageDog)"
        );
        $requete_prepare->execute(
            array(  'nameDog' => "$nameDog", 
                    'race' => "$race", 
                    'mix' => "$mix", 
                    'birtdate' => "$birthdate", 
                    'gender' => "$gender",
                    'imageDog' => "$imageDog"
                )
        );
   }


    public function getDogOfUser($idUser){
        $stmt->execute(array("idUser", $isUser));
    }



    public function getDog($id){
        $stmt=$connexion->prepare(
            "SELECT d.id, u.name AS nameUser, d.race, d.nameDog
            FROM Dog d
            INNER JOIN User u
            ON d.idUser=u.id"
            );
    }   

}
class User {
    private $id;
    private $firstName;
    private $lastName;
    private $userName;
    private $passwordUser;
    private $dateConnect;
    private $mailAdress;
    private $dogs;

    public function __set($name,$value){}
    public function getId(){return $this->id;}
    public function getFirstName(){return $this->firstName;}
    public function getLastName(){return $this->lastName;}
    public function getUserName(){return $this->userName;}
    public function getPasswordUser(){return $this->passwordUser;}
    public function getDateConnect(){return $this->dateConnect;}
    public function getMailAdress(){return $this->mailAdress;}

}


class Dog{
    private $id;
    private $nameDog;
    private $race;
    private $mix;
    private $birthdate;
    private $gender;
    private $image;

    public function __set($name,$value){}
    public function getId(){return $this->id;}
    public function getNameDog(){return $this->nameDog;}
    public function getRace(){return $this->race;}
    public function getMix(){return $this->mix;}
    public function getBirthdate(){return $this->birthdate;}
    public function getGender(){return $this->gender;}
    public function getImage(){return $this->image;}
           
}

class Article {
    private $id;
    private $image;
    private $text;
    private $publicationDate;

    public function __set($name,$value){}
    public function getId(){return $this->id;}
    public function getImage(){return $this->image;}
    public function getText(){return $this->text;}
    public function getPublicationDate(){return $this->publicationDate;}
}

class Comment {
    private $id;
    private $text;
    private $publicationDate;
    private $userName;
    
    public function __set($name,$value){}
    public function getId(){return $this->id;}
    public function getText(){return $this->text;}
    public function getPublicationDate(){return $this->publicationDate;}
    public function getUserName(){return $this->userName;}

        
}

class raceDog {
    private $id;
    private $race;

    public function __set($name,$value){}
        public function getId(){return $this->$id;}
        public function getRace(){return $this->$race;}
}



?>