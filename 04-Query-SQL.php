<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "SELECT id, name, email FROM customers";
$result = $connection->query($sql);
foreach ($result as $row) {
  $id = $row["id"];
  $name = $row["name"];
  $email = $row["email"];

  echo "ID: $id";
  echo "<br>";
  echo "Name: $name";
  echo "<br>";
  echo "Email: $email";
  echo "<br>";
  echo "<br>";
}

// close connection
$connection = null;
