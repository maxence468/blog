<?php 
require_once('model/UserDAO.php');
require_once('model/Article.php');



class ArticleDao{
	private PDO $bdd;

	public function __construct(){
		try {
			$this->bdd = new PDO('mysql:host=localhost;dbname=blog2', 'root', ''); 
		} catch (Exception $e) {
			die('ERROR : '.$e->getMessage());
		}
	}

	public function find(int $id) : ?Article {
		$sql = "SELECT * FROM articles WHERE id = ?";
		$stmt = $this->bdd->prepare($sql);
		$stmt->execute([
			$id
		]);
		$data = $stmt->fetch();

		if($data){
			$udao = new UserDAO();
			$a = new Article();
			$a->setId($data['id']);
			$a->setTitle($data['title']);
			$a->setPublishedAt(new DateTime($data['published_at']));
			$a->setPicture($data['picture']);
			$a->setContent($data['content']);
			$a->setUser($udao->find($data['user_id']));

			return $a;

		}else{
			return null;
		}

	}


	public function findAll() : array {
		$sql = "SELECT * FROM articles";
				$stmt = $this->bdd->query($sql);

				$tabArticles = [];
				$data = $stmt->fetchAll();
				foreach ($data as $tabArticle) {
					$udao = new UserDAO();
					$a = new Article();
					$a->setId($tabArticle['id']);
					$a->setTitle($tabArticle['title']);
					$a->setPublishedAt(new DateTime($tabArticle['published_at']));
					$a->setPicture($tabArticle['picture']);
					$a->setContent($tabArticle['content']);
					$a->setUser($udao->find($tabArticle['user_id']));

					$tabArticles[] = $a;
				}
				return $tabArticles;
			}








}