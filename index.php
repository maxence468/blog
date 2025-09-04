<?php
session_start();

if(isset($_GET['page'])){
    switch($_GET['page']){

        case 'article':
            include("Controller/controllerArticle.php");
            break;
        case 'ajout':
            include("Controller/controllerAjout.php");
            break;
        default:
            include("Controller/controllerUtilisateur.php");
            break;
    }
} else {
    require("Controller/controllerUtilisateur.php");
}

if(isset($_GET['deco'])){
    session_unset();
    session_destroy();
}


include('view/head.php');
if(isset($_GET['page'])){
    include('view/'.$_GET['page'].'.php');
} else {
    include('view/connexion.php');
}
include('view/foot.php');

