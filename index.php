<?php

$db="test";
$dbhost="localhost";
$dbport=3307;
$dbuser="brendan";
$dbpasswd="epsi";

$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$pdo->exec("SET CHARACTER SET utf8");

$stmt = $pdo->prepare("SELECT * FROM hello WHERE id = 1;");
$stmt->execute();

$res = $stmt->fetch();
echo $res['Description'];

$pdo = null;

?>