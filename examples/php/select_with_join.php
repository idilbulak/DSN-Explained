<?php
$sql = "SELECT users.name, orders.order_id 
        FROM users 
        JOIN orders ON users.id = orders.user_id 
        WHERE users.name = :name";

$stmt = $pdo->prepare($sql);
$stmt->execute(['name' => 'John']);

$results = $stmt->fetchAll();
?>
