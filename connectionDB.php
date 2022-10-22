<?php
class Connect{
function __construct()
{
  $this->host = "localhost";
  $this->user = "rizvi";
  $this->pass = "Rizvi@2976";
  $this->dbName = "php-crud";

  $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->dbName);

  if(!$this->conn) die(mysqli_error($this->conn));
}
}
?>