<?php
class Categorie {

    // -- Déclaration des propriétés de notre class "Article"
    private $libelle,
    $collectionArticles = [];

    /**
        * Afin de pouvoir attribuer une valeur à mes différentes variables,
        * Je vais mettre en place un constructeur
        */   

    public function __construct (
        $libelle) {


        // ** Ici, nous allons attribuer à chaque propriété de notre classe la valeur qui a été passée au constructeur

        $this->libelle               = $libelle;

        //        $articles[] = array('La Formation WF3', 'La Martinique');

    } //Fin de mon constructeur

    /**
    * Getters : Fonctions qui vont avoir la charge de nous renvoyer nos informations.
    * Nous aurons une fonction par propriété de notre classe
    */

    public function getLibelle() {
        return $this->libelle;
    }

    public function getCollectionArticles() {
        return $this->collectionArticles;
    }

    /**
    * Setters : Fonctions qui vont avoir la charge de modifier les propriétés de notre classe.
    */

    public function setLibelle($MonNouveauLibelle) {
        $this->libelle = $MonNouveauLibelle;
    }

    /**
    * Permet d'ajouter un Objet Article à notre tableau (Collection) d'Articles
    */

    public function AjouterUnArticle (Article $article) {
        $this->CollectionArticles[] = $article;
    }

} //Fin de ma classe Categorie