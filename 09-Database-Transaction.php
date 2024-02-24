<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('ahmad@gmail.com', 'Hallo hallo')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('ahmad@gmail.com', 'Hallo hallo')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('ahmad@gmail.com', 'Hallo hallo')");

// ngebatalin transaksi
// auto increment-nya ga ke-rollback
$connection->rollBack();

// $connection->commit();
// close connection
$connection = null;
