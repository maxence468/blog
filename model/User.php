<?php

class User{

	//attributs
	private int $id;
	private string $name;
	private string $mail;
	private string $password;

	//constructeur
 	public function __construct($id = 0, $name = "", $mail = "", $password = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->mail = $mail;
        $this->password = $password;
    }
// $u = new User (name : "bob", password : "bob"); 
   
	//accesseurs 
	public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getMail(): string {
        return $this->mail;
    }

    public function setMail(string $mail): void {
        $this->mail = $mail;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

	//toString
	public function __toString() : string {
		return "id : $this->id
		 , name : $this->name
		 , mail : $this->mail
		 , password : $this->password";
	}

}