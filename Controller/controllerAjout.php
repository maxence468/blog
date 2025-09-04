<?php
require_once('Model/BO/Article.php');
use BO\Article;
require ('Model/DAO/utilisateurDAO.php');
require ('Model/DAO/articleDAO.php');

$adao = new articleDAO();
$udao = new utilisateurDAO();



if(isset($_POST['btnAjout'])){
    if(isset($_POST['titre']) && isset($_POST['body'])){
        $titre = $_POST['titre'];
        $body = $_POST['body'];
        $date = new DateTime();
        $image = '';
        if(isset($_POST['image'])){
            $image = $_POST['image'];
        }
        $utilisateur = $udao->find($_SESSION['idUser']);
        $article = new article($utilisateur,$date,$image,$body,$titre);
        $adao->create($article);
    }
}











/*
  <form method="post" action="index.php">
    <input type="text" name="titre" placeholder="Titre">
    <input type="text" name="body" placeholder="Contenu de l'article">
    <input type="file" name="img" placeholder="Image">
    <input name="btnAjout" type="submit" value="Créer l'article">
</form>
 */