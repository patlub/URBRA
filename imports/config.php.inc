<?php

$DB_HOST = "localhost";
$DB_NAME = "urbra";
$DB_USER = "root";
$DB_PASSWORD = "";
try {
    return new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
} catch (PDOException $e) {
    echo "Connection Error: " . $e->getMessage();
}


