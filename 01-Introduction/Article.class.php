<?php

/*-- 
* Création d'une classe Article
* Une classe est une entité regroupant des variables / propriétés
* et des fonctions.
*/

class Article {

    // -- Déclaration des propriétés de notre class "Article"
    private $Titre,
    $Auteur,
    $Accroche,
    $Description,
    $FeaturedImage,
    $DateCreationArticle;

    /**
        * Afin de pouvoir attribuer une valeur à mes différentes variables,
        * Je vais mettre en place un constructeur
        */   

    public function __construct (
        $Titre,
        $Accroche,
        $Description,
        $FeaturedImage,
        $DateCreationArticle) {

        // ** Ici, nous allons attribuer à chaque propriété de notre classe la valeur qui a été passée au constructeur

        $this->Titre                 = $Titre;
        $this->Accroche              = $Accroche;
        $this->Description           = $Description;
        $this->FeaturedImage         = $FeaturedImage;
        $this->DateCreationArticle   = $DateCreationArticle;

    } //Fin de mon constructeur

    /**
    * Getters : Fonctions qui vont avoir la charge de nous renvoyer nos informations.
    * Nous aurons une fonction par propriété de notre classe
    */

    public function getTitre() {
        return $this->Titre;
    }
    
    public function getAuteur() {
        return $this->Auteur;
    }

    public function getAccroche() {
        return $this->Accroche;
    }

    public function getDescription() {
        return $this->Description;
    }

    public function getFeaturedImage() {
        return $this->FeaturedImage;
    }

    public function getDateCreationArticle() {
        return $this->DateCreationArticle;
    }

    /**
    * Setters : Fonctions qui vont avoir la charge de modifier les propriétés de notre classe.
    */

    public function setTitre($MonNouveauTitre) {
        $this->Titre = $MonNouveauTitre;
    }
    
    public function setAuteur($MonNouvelAuteur) {
        $this->Auteur = $MonNouvelAuteur;
    }
    

} //Fin de ma classe Article




