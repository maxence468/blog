<?php

use BO\Article;
require_once ('Model/DAO/utilisateurDAO.php');
require_once('connexionMySQL.php');


class articleDAO extends connexionMySQL {

    public function __construct() {
        parent::__construct();
    }

    public function create($article) {
        $sql = 'INSERT INTO article (title,body,image,postedAt,idUser) VALUES (?,?,?,?,?)';
        $result = $this->bdd->prepare($sql);
        $result->execute([
            $article->getTitre(),
            $article->getBody(),
            $article->getImage(),
            $article->getPostedAt()->format('Y-m-d H:i:s'),
            $article->getUtilisateur()->getIdUser()
        ]);
    }

    public function update($article) {
        $sql = 'UPDATE article SET title = ?, body = ?, image = ?, postedAt = ? WHERE idArticle = ?';
        $result = $this->bdd->prepare($sql);
        $result->execute([
            $article->getTitle(),
            $article->getBody(),
            $article->getImage(),
            $article->getPostedAt(),
            $article->getIdArticle()
        ]);
    }

    public function delete($id) {
        $sql = 'DELETE FROM article WHERE idArticle = ?';
        $result = $this->bdd->prepare($sql);
        $result->execute([$id]);
    }

    public function findAll() {
        $udao = new utilisateurDAO();

        $sql = 'SELECT title, body, image, postedAt, idUser FROM article ORDER BY postedAt';
        $result = $this->bdd->query($sql);
        $articles = [];
        while ($article = $result->fetch(PDO::FETCH_ASSOC)) {
            $titre = $article['title'];
            $body = $article['body'];
            $image = $article['image'];
            $date = new DateTime($article['postedAt']);
            $idUser = $article['idUser'];
            $user = $udao->find($idUser);

            $articles[] = new article($user,$date,$image,$body,$titre);
        }
        return $articles;
    }

}

/*
$this->utilisateur = $utilisateur;
$this->postedAt = $postedAt;
$this->image = $image;
$this->body = $body;
$this->titre = $titre;  */