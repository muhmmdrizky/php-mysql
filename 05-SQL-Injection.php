<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

// menghindari SQL Injection

$username = $connection->quote("admin'; #");
$password = $connection->quote("admin");

// ga perlu pakai quote '' di query-nya karena udah ada quote di atas
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";

$result = $connection->query($sql);

$success = false;

foreach ($result as $row) {
  $success = true;
}

if ($success) {
  echo "Login success";
} else {
  echo "Login failed";
}

// close connection
$connection = null;
