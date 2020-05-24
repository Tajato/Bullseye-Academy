<?php
session_start();
class config {

    public static function connect() {

$servername = '50.87.144.58';
$dbusername = 'richfore_richfor';
$dbpassword = 'cuzboy15';
$dbname = 'richfore_loginsystem';
$dsn = 'mysql:host=50.87.144.58;dbname=richfore_loginsystem';

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

