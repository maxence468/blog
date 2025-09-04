<?php

use DateTime;
include User

class Article {

    private int $id;
    private string $title;
    private DateTime $published_at;
    private string $picture;
    private string $content;

    private User $user;

    
    public function __construct($id = 0, $title = "", $published_at = "", $picture = "", $content = "", $user = new User())
    {
        $this->id = $id;
        $this->title = $title;
        $this->published_at = $published_at;
        $this->picture = $picture;
        $this->content = $content;
    }

    // --- Getters ---
    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getPublishedAt(): string {
        return $this->published_at;
    }

    public function getPicture(): ?string {
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

    public function setPublishedAt(string $published_at): void {
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



}