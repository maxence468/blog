<?php

require_once('model/User.php');

class Article {

    private int $id;
    private string $title;
    private DateTime $published_at;
    private string $picture;
    private string $content;
    private User $user;

    
    public function __construct(int $id = 0, string $title = "", 
        DateTime $published_at = new DateTime, string $picture = "", string $content = "", $user = new User())
    {
        $this->id = $id;
        $this->title = $title;
        $this->published_at = $published_at;
        $this->picture = $picture;
        $this->content = $content;
        $this->user = $user;
    }

    // --- Getters ---
    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getPublishedAt(): DateTime {
        return $this->published_at;
    }

    public function getPicture(): string {
        return $this->picture;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function getUser(): User {
        return $this->user;
    }

    // --- Setters ---
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setPublishedAt(DateTime $published_at): void {
        $this->published_at = $published_at;
    }

    public function setPicture(?string $picture): void {
        $this->picture = $picture;
    }

    public function setContent(string $content): void {
        $this->content = $content;
    }

    public function setUser(User $user): void {
        $this->user = $user;
    }

    public function __toString() : string{
       $published_at = $this->published_at->format('Y-m-d H:i:s');
        return "Article{ id = $this->id, 
        title = $this->title, 
        published_at = $published_at, 
        picture = $this->picture, 
        content = $this->content, 
        user = $this->user }";
    }



}