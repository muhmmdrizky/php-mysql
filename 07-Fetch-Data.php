<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->execute([$username, $password]);

// function fetch
if ($row = $result->fetch()) {
  echo "Login success: " . $row["username"] . "<br>";
} else {
  echo "Login failed" . "<br>";
}

// function fetchAll
$sql2 = "SELECT * FROM customers";
$result2 = $connection->query($sql2);
$customers = $result2->fetchAll();

var_dump($customers);

// close connection
$connection = null;
