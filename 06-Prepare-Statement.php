<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
// cara lebih singkat
$result->execute([$username, $password]);

// binding parameter
// binding parameter dengan index, :username di query diganti ?
// parameternya diganti nomor
// $result->bindParam(1, $username); // "username" diambil dari yang di dalam query
// $result->bindParam(2, $password);
// $result->execute();



$success = false;
$findUser = null;

foreach ($result as $row) {
  $success = true;
  $findUser = $row["username"];
}

if ($success) {
  echo "Login success: " . $findUser;
} else {
  echo "Login failed";
}
// close connection
$connection = null;
