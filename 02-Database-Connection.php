<?php
$host = "localhost";
$port = 3306;
$database = "latihan_php_database";
$username = "root";
$password = "";

try {
  $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
  echo "Connection success";

  // close connection
  $connection = null;
} catch (PDOException $exception) {
  echo "Connection error: " . $exception->getMessage();
}
