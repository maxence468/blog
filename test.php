<?php
require_once('model/UserDAO.php');
require_once('model/ArticleDAO.php');


require_once('model/User.php');
require_once('model/Article.php');

/*
$u = new User(mail:"mail", password:"123");

$u->setName("npmtropbien");

echo $u;

$publishedAt = "2025-01-01 13:23:01";
$publishedAtObj = new DateTime($publishedAt);

$a = new Article(id:23, published_at:$publishedAtObj, user:$u, title:"titre");

echo "<br>"; 
echo $a;

$udao = new UserDAO();

$z = $udao->find(3);
echo "<br>". $z;
var_dump($z);

$all = $udao->findAll();

var_dump($all);

$t = $adao->find(1);
var_dump($t);
*/
$adao = new articleDAO();

$tall = $adao->findAll();
var_dump($tall);


