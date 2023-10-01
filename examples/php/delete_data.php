<?php
$sql = "DELETE FROM users WHERE name = :name";
$stmt = $pdo->prepare($sql);
$stmt->execute(['name' => 'John']);
?>
