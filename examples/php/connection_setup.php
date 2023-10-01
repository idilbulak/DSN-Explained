<?php
$host = '127.0.0.1';
$db   = 'my_database';
$user = 'my_user';
$pass = 'my_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);
?>
