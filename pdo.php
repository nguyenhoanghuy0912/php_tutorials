<?php

$DB_TYPE = 'mysql';
$DB_HOST = 'localhost';
$DB_NAME = 'crud';
$USER_NAME = 'root';
$PASSWORD = '';

try {
    $connection = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER_NAME, $PASSWORD);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

function all() {
    global $connection;
    $sql = "SELECT * FROM categories";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

