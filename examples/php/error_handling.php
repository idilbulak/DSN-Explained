<?php
try {
    $stmt = $pdo->query("SELECT * FROM non_existent_table");
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
