<?php
class Database {
  // private $host     = '';
  // private $user     = '';
  // private $password = '';
  // private $db       = '';

  private $servername       = 'localhost';
  private $username       = 'root';
  private $password   = '';
  private $dbname    = 'accounting';

  public $conn;

  public function getConnection() {
    $this->conn = null;
    // Create connection
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    // Check connection
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
    return $this->conn;
  }
}
?>
