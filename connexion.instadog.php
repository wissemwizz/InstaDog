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
        
        try{$this->connexion = new PDO(
                'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,
                $PARAM_utilisateur,
                $PARAM_mot_passe);
            
        }catch(Exception $e){

            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();         
        }
    }
    public function getConnexion(){
        return $this->connexion;
    }

// INSERTION NOUVEL UTILISATEUR

public function insertUser($lastName, $firstName, $userName, $passwordUser, $dateConnect, $mailAdress) {

    $requete_prepare = $this->connexion->prepare(
        "INSERT INTO User ( firstName,
                            lastName, 
                            userName, 
                            passwordUser, 
                            dateConnect,
                            mailAdress) 
        values (:prenom,
                :nom, 
                :pseudo, 
                :motpass, 
                :dateconnex,
                :email)"
    );
    $requete_prepare->execute(
        array(  'prenom' => $firstName, 
                'nom' => $lastName,
                'pseudo' => $userName, 
                'motpass' => $passwordUser, 
                'dateconnex' => $dateConnect,
                'email' => $mailAdress
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


    public function getDogbyUserId($idUser){
        $stmt->execute(array("idUser", $idUser));
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

// CLASS OBJET

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


// CLASS OBJET

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

// CLASS TABLEAU

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

// CLASS TABLEAU

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

// CLASS OBJET

class raceDog {
    private $id;
    private $race;

    public function __set($name,$value){}
        public function getId(){return $this->$id;}
        public function getRace(){return $this->$race;}
}



?>