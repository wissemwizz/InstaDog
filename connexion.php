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
            
            $this->connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe);
            
        }catch(Exception $e){

            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();
            
        }
    }
