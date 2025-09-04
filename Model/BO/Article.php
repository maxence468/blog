<?php

namespace BO;

use DateTime;

class Article {

    private int $idArticle;
    private string $titre;
    private string $body;
    private string $image;
    private DateTime $postedAt;

    private Utilisateur $utilisateur;

    /**
     * @param int $idArticle
     * @param Utilisateur $utilisateur
     * @param DateTime $postedAt
     * @param string $image
     * @param string $body
     * @param string $titre
     */
    public function __construct(Utilisateur $utilisateur, DateTime $postedAt, string $image, string $body, string $titre)
    {
        $this->utilisateur = $utilisateur;
        $this->postedAt = $postedAt;
        $this->image = $image;
        $this->body = $body;
        $this->titre = $titre;
    }

    public function getIdArticle(): int
    {
        return $this->idArticle;
    }

    public function setIdArticle(int $idArticle): void
    {
        $this->idArticle = $idArticle;
    }

    public function getUtilisateur(): Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(Utilisateur $utilisateur): void
    {
        $this->utilisateur = $utilisateur;
    }

    public function getPostedAt(): DateTime
    {
        return $this->postedAt;
    }

    public function setPostedAt(DateTime $postedAt): void
    {
        $this->postedAt = $postedAt;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }



}