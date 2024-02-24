<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->exec("INSERT INTO comments (email, comment) VALUES ('rizky@gmail.com', 'Hallo')");

// mendapatkan id terakhir yang dibuat secara auto increment
$id = $connection->lastInsertId();
echo $id;
// close connection
$connection = null;
