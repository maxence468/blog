<?php
require ('Model/BO/Article.php');
use BO\Article;
require ('Model/DAO/articleDAO.php');

$adao = new articleDAO();

$a = $adao->findAll();

