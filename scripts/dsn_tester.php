<?php

// DSN details (replace this sample with your real credentials)
$dsn = "mysql:host=localhost;dbname=mydb";
$username = "myuser";
$password = "mypassword";

try {
    // Attempting a connection using PDO
    $pdo = new PDO($dsn, $username, $password);
    
    // If no exceptions are thrown, it means we've successfully connected.
    echo "Connection successful using the provided DSN!";
} catch (PDOException $e) {
    // If an error occurs during the connection, display the error.
    echo "Connection error: " . $e->getMessage();
}

?>

