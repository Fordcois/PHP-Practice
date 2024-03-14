<?php
require 'functions.php';
// require 'router.php';

// connect to the MYSQL database
$dsn ='mysql:host=localhost;port=3306;dbname=author;user=root;charset=utf8mb4';

$pdo = new PDO($dsn);

$statement= $pdo->prepare('select * from blog');

$statement ->execute();

$posts = $statement ->fetchAll();




dd($posts);

