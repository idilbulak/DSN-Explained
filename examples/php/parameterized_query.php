<?php
$name = "John";
$stmt = $pdo->prepare("SELECT * FROM users WHERE name = :name");
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->execute();

$result = $stmt->fetchAll();
?>
