<?php
require 'functions.php';
require 'Database.php';
// require 'router.php';

// connect to the MYSQL database, and execute a query

$config = require('config.php');

$db = new Database($config['database']);

$posts= $db->query('select title from blog') ->fetchAll();



foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}

