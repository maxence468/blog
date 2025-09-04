<?php
require_once('model/User.php');

$u = new User(mail:"mail", password:"123");

$u->setName("npmtropbien");

echo $u;