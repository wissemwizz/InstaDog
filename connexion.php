<?php

class Connexion {

    private $connexion;

    public function __construct(){
    
        $PARAM_hote='localhost';
        $PARAM_port='3306';
        $PARAM_nom_bd='Instadog';
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
    public function __getArticle($id){
        $stmt=$connexion->prepare( 


        )
    }
}
class User {
    private $id;
    private $firstName;
    private $lastName;
    private $userName;
    private $password;
    private $dateConnect;
    private $mailAdress;
    private $dogs;

    public function __set($name,$value){}
        public function getid(){return $this->id;}
        public function getfirstName(){return $this->firstName;}
        public function getlastName(){return $this->lastName;}
        public function getuserName(){return $this->userName;}
        public function getpassword(){return $this->password;}
        public function getdateConnect(){return $this->dateConnect;}
        public function getmailAdress(){return $this->mailAdress;}

            public function ajouterDog($dogs){}
                public function retirerDog($id){}
                    public function getdogs(){}
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
        public function getid(){return $this->id;}
        public function getnameDog(){return $this->nameDog;}
        public function getrace(){return $this->race;}
        public function getmix(){return $this->mix;}
        public function getbirthdate(){return $this->birthdate;}
        public function getgender(){return $this->gender;}
        public function getimage(){return $this->image;}
            public function getdogOfUser($idUser){
                    $stmt->execute(array("idUser", $isUser));
    }
}

class Article {
    private $id;
    private $image;
    private $text;
    private $publicationDate;

    public function __set($name,$value){}
        public function getid(){return $this->id;}
        public function getimage(){return $this->image;}
        public function gettext(){return $this->text;}
        public function getpublicationDate(){return $this->publicationDate;}
}

class Comment {
    private $id;
    private $text;
    private $publicationDate;
    private $finduserName;
    private $nameDog;
    private $raceDog;
    
    public function __set($name,$value){}
        public function getid(){return $this->id;}
        public function gettext(){return $this->text;}
        public function getpublicationDate(){return $this->publicationDate;}
        public function getfinduserName(){return $this->finduserName;}
        public function getnameDog(){return $this->nameDog;}
        public function getraceDog(){return $this->raceDog;}

        
}

class raceDog {
    private $id;
    private $race;

    public function __set($name,$value){}
        public function getid(){return $this->$id;}
        public function getrace(){return $this->race;}
}
?>