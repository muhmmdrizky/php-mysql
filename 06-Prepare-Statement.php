<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

// close connection
$connection = null;
