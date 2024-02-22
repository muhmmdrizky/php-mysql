<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "INSERT INTO customers (id, name, email) VALUES ('ABC03', 'Hendra Setiawan', 'hendrasetiawan@gmail.com')";

try {
  $connection->exec($sql);
  echo "Query success";

  // close connection
  $connection = null;
} catch (PDOException $exception) {
  echo "Query failed: " . $exception->getMessage();
}
