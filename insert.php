<?php 
require 'classes/Database.php';

$database = new Database;

if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $body = $_POST['body'];

  $database->query('INSERT INTO posts (title, body) VALUES(:title, :body)');
  $database->bind(':title', $title);
  $database->bind(':body', $body);
  $database->execute();
  if ($database->lastInsertId()) {
    echo '<p>Post added!</p>';
  }
}