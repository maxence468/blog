<?php

namespace BO;

class Utilisateur {

    private int $idUser;
    private string $username;
    private string $password;
    private \DateTime $lastConnection;

    /**
     * @param int $idUser
     * @param string $username
     * @param string $password
     * @param \DateTime $lastConnection
     */
    public function __construct(int $idUser, string $username, string $password, \DateTime $lastConnection)
    {
        $this->idUser = $idUser;
        $this->username = $username;
        $this->password = $password;
        $this->lastConnection = $lastConnection;
    }

    public function getIdUser(): int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getLastConnection(): \DateTime
    {
        return $this->lastConnection;
    }

    public function setLastConnection(\DateTime $lastConnection): void
    {
        $this->lastConnection = $lastConnection;
    }


}