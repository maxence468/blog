<?php
require ('Model/DAO/utilisateurDAO.php');
$userDAO = new UtilisateurDAO();


if(isset($_POST['btnConnexion'])){
    if(isset($_POST['nom']) && isset($_POST['motdepasse'])){
        $user = $userDAO->connecteUtilisateur($_POST['nom']);
        if($user && password_verify(trim($_POST['motdepasse']), $user['password'])){
            $_SESSION['idUser'] = $user['idUser'];
            $_SESSION['username'] = $user['username'];
            header('Location: index.php?page=article');
        }
        else{
            echo 'erreur';
        }
    }
}
/*
$mdp = 'test';
$hash = password_hash($mdp, PASSWORD_DEFAULT);
$userDAO->create(1,'a',$hash);



if($vue == 'connexion'){
    include('view/connexion.php');
}

if($vue == 'article'){
    include('view/article.php');
}
*/
