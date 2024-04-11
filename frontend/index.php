<?php

require 'functions.php';
require 'router.php';
require 'Database.php';

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from blog where id = 1";

$posts = $db->query($query, [':id' => $id])->fetch();

