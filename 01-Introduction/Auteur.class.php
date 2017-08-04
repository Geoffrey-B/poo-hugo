<?php
class Auteur {

    // -- Déclaration des propriétés de notre class "Article"
    private $nom,
    $prenom,
    $email;

    /**
        * Afin de pouvoir attribuer une valeur à mes différentes variables,
        * Je vais mettre en place un constructeur
        */   

    public function __construct (
        $nom,
        $prenom,
        $email) {

        // ** Ici, nous allons attribuer à chaque propriété de notre classe la valeur qui a été passée au constructeur

        $this->nom               = $nom;
        $this->prenom              = $prenom;
        $this->email           = $email;

    } //Fin de mon constructeur

    /**
    * Getters : Fonctions qui vont avoir la charge de nous renvoyer nos informations.
    * Nous aurons une fonction par propriété de notre classe
    */

    public function getNomComplet() {
        return $this->prenom." ".$this->nom;
    }
    
    
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }


    /**
    * Setters : Fonctions qui vont avoir la charge de modifier les propriétés de notre classe.
    */

    public function setPrenom($MonNouveauPrenom) {
        $this->prenom = $MonNouveauPrenom;
    }
    
    public function setNom($MonNouveauNom) {
        $this->nom = $MonNouveauNom;
    }
    
    public function setEmail($MonNouvelEmail) {
        $this->email = $MonNouvelEmail;
    }

} //Fin de ma classe Auteur