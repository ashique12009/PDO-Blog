<?php 
require 'classes/Database.php';

$database = new Database;

$database->query('SELECT * FROM posts');
$rows = $database->resultset();

var_dump($rows);