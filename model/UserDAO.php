<?php 

class UserDAO {
	private PDO $bdd;

	public function __construct(){
		try {
			$this->bdd = new PDO('mysql:host=localhost;dbname=blog2', 'root', ''); 
		} catch (Exception $e) {
			die('ERROR : '.$e->getMessage());
		}
	}

	//find
	public function find(int $id) : ?User {
		$sql = "SELECT * FROM users WHERE id = ?";
		$stmt = $this->bdd->prepare($sql);
		$stmt->execute([
			$id
		]);
		$data = $stmt->fetch();

		if($data){
			$u = new User();
			$u->setId($data['id']);
			$u->setName($data['name']);
			$u->setMail($data['mail']);
			$u->setPassword($data['password']);

			return $u;


		}else{
			return null;
		}
	}

	//findALL
	public function findAll() : array {
		$sql = "SELECT * FROM users";
		$stmt = $this->bdd->query($sql);

		$tabUsers = [];
		$data = $stmt->fetchAll();
		foreach ($data as $tabUser) {
			$u = new User();
			$u->setId($tabUser['id']);
			$u->setName($tabUser['name']);
			$u->setMail($tabUser['mail']);
			$u->setPassword($tabUser['password']);

			$tabUsers[] = $u;
		}
		return $tabUsers;
	}

	//Create

	//update

	//delete





}