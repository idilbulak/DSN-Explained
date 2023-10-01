<?php
$sql = "UPDATE users SET email = :email WHERE name = :name";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => 'john.doe@example.com', 'name' => 'John']);
?>
