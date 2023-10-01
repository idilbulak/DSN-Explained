<?php

$dsn = 'mysql:host=localhost;dbname=mydatabase;charset=utf8mb4';

$db_user = 'myuser';
$db_password = 'mypassword';

try {
    // PDO instance
    $pdo = new PDO($dsn, $db_user, $db_password);
    
    // Set error mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database connection successful!";

    // Sample query
    $stmt = $pdo->query('SELECT * FROM mytable');
    while ($row = $stmt->fetch()) {
        echo "<p>" . $row['column_name'] . "</p>";
    }

} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}

?>
