<?php
try {
    $pdo->beginTransaction();

    $sql1 = "UPDATE users SET balance = balance - 100 WHERE name = 'John'";
    $pdo->exec($sql1);

    $sql2 = "UPDATE users SET balance = balance + 100 WHERE name = 'Doe'";
    $pdo->exec($sql2);

    $pdo->commit();
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Transaction failed: " . $e->getMessage();
}
?>
