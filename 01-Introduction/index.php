<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<?php

include 'Article.class.php';
include 'Auteur.class.php';
include 'Categorie.class.php';

/**
 * Création d'une instance de la Class "Article"
 * Ici, notre variable $UnArticle est un objet de la class Article.
 * En ce sens, elle a accès à l'ensemble des propriétés et fonctions qui la composent.
 */

$UnArticle = new Article("La Formation WF3", "Une Formation Certifiante en 3 mois !", "Rejoignez-nous à Limas et vous verrez bien !", "wf3.jpg", "04/08/2017");

// -- Afficher l'objet UnArticle

echo '<pre>';
print_r($UnArticle);
echo '</pre>';




$DeuxiemeArticle = new Article("La Martinique", "Une île pour les vacances !", "Venez nombweu pouw prendre le Ti-Punch...", "ti-punch.jpg", "04/08/2017");
$TroisiemeArticle = new Article("La Guadeloupe", "Une île pour les vacances !", "Venez nombweu pouw prendre le Ti-Punch...", "ti-punch.jpg", "04/08/2017");
$QuatriemeArticle = new Article("La Reunion", "Une île pour les vacances !", "Venez nombweu pouw prendre le Ti-Punch...", "ti-punch.jpg", "04/08/2017");

echo '<pre>';
print_r($DeuxiemeArticle);
echo '</pre>';



// -- Je veux afficher le titre de mon premier article

//echo $UnArticle->Titre;
//Fatal error: Cannot access private property Article::$Titre in C:\xampp\htdocs\poo-hugo\01-Introduction\index.php on line 32


echo $UnArticle->getTitre().'<br>';
echo $UnArticle->getAccroche().'<br>';
echo $UnArticle->getDescription().'<br>';
echo $UnArticle->getFeaturedImage().'<br>';
echo $UnArticle->getDateCreationArticle().'<br><br>';

echo $DeuxiemeArticle->getTitre().'<br>';
echo $DeuxiemeArticle->getAccroche().'<br>';
echo $DeuxiemeArticle->getDescription().'<br>';
echo $DeuxiemeArticle->getFeaturedImage().'<br>';
echo $DeuxiemeArticle->getDateCreationArticle().'<br><br>';



$UnArticle->setTitre("La formation WebForce3");
echo $UnArticle->getTitre().'<br>';

echo '<pre>';
print_r($UnArticle);
echo '</pre>';


$UnAuteur = new Auteur("BERTHELOT", "Geoffrey", "berthelot.geo@gmail.com");
$UnArticle->setAuteur($UnAuteur);
$DeuxiemeArticle->setAuteur($UnAuteur);

echo '<pre>';
print_r($UnArticle);
echo '</pre>';

echo $UnAuteur->getNomComplet();

echo '<pre>';
print_r($UnAuteur);
echo '</pre>';

echo "<hr>";

$uneCategorie = new Categorie('Formation informatique');
$uneCategorie->AjouterUnArticle($UnArticle);
$uneCategorie->AjouterUnArticle($DeuxiemeArticle);

echo '<pre>';
print_r($uneCategorie);
echo '</pre>';

echo '<hr>';

echo '<ol>';
    echo '<li>';
        echo $uneCategorie->getLibelle();
    echo '</li>';
    echo '<ul>';
        $articles = $uneCategorie->getCollectionArticles();
        foreach ($articles as $article) :
            echo '<li>'.$article->getTitre() ."</li>";
        endforeach;
    echo '</ul>';
echo '</ol>';