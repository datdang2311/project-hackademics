<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "photo";

try {
    $connection = new PDO("mysql:host=$host;dbname=$db", $username, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("set names utf8");
} catch (PDOException $e) {
    echo 'Connection fail: ' . $e->getMessage();
}
?>