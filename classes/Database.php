<?php 
/**
 * Database class file
 */
class ClassName
{
  private $host = "localhost";
  private $user = "root";
  private $password = "";
  private $db_name = "pdo-blog";

  private $dbh;
  private $error;
  private $stmt;

  public function __construct()
  {
    // Set DSN
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
    
    // Set options
    $options = [
      PDO::ATTR_PERSISTENT  => true,
      PDO::ATTR_ERRMODE     => PDO::ERRMODE_EXCEPTION,
    ];

    // Create new PDO instance
    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
    }
  }
}
