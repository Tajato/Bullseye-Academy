<?php
session_start();
class config {

    public static function connect() {

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'loginsystem';
$dsn = 'mysql:host=localhost;dbname=loginsystem';

try {
$conn = new PDO($dsn, $dbusername, $dbpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e) {
    die("Connection failed:" .$e->getMessage());
}

return $conn;

    }
}

