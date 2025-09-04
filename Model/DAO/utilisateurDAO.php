<?php
require_once('Model/BO/Utilisateur.php');
use BO\Utilisateur;

require_once('connexionMySQL.php');
class utilisateurDAO extends connexionMySQL {

    public function __construct() {
        parent::__construct();
    }
    public function connecteUtilisateur($nom) {
        $res = null;
        if ($this->bdd) {
            $sql = 'SELECT * FROM utilisateur WHERE username = ?';
            $result = $this->bdd->prepare($sql);
            $result->execute([$nom]);
            $data = $result->fetch(PDO::FETCH_ASSOC);

            if($data){
                $res = $data;

                $sql1 = 'UPDATE utilisateur SET lastConnection = NOW() WHERE idUser = ?';
                $result = $this->bdd->prepare($sql1);
                $result->execute([$data['idUser']]);
            }
        }
        return $res;
    }

    public function create($id,$nom,$motdepasse) {
        $sql = 'INSERT INTO utilisateur (idUser,username,password) VALUES (?,?,?)';
        $result = $this->bdd->prepare($sql);
        $result->execute([
            $id,
            $nom,
            $motdepasse
        ]);
    }

    public function find($id)
    {
        $sql = 'SELECT idUser, username, password, lastConnection FROM utilisateur WHERE idUser = ?';
        $result = $this->bdd->prepare($sql);
        $result->execute([
            $id,
        ]);
        $data = $result->fetch(PDO::FETCH_ASSOC);
        if($data){
            $date = new DateTime($data['lastConnection']);
            $utilisateur = new utilisateur($data['idUser'],$data['username'],$data['password'],$date);
            return $utilisateur;
        }
        else{
            return null;
        }
    }


}