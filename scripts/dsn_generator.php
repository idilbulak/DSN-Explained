<?php

echo "DSN Generator!\n";

// Collect database type
echo "Supported Databases: mysql, pgsql, sqlite, etc.\n";
echo "Enter database type: ";
$dbType = trim(fgets(STDIN));

// For SQLite, only a path is needed
if ($dbType === "sqlite") {
    echo "Enter database path: ";
    $dbPath = trim(fgets(STDIN));
    echo "DSN: sqlite:$dbPath\n";
    exit;
}

// For other databases..
echo "Enter host (e.g., localhost): ";
$host = trim(fgets(STDIN));

echo "Enter port (press enter for default): ";
$port = trim(fgets(STDIN));

echo "Enter database name: ";
$dbName = trim(fgets(STDIN));

// Generate DSN
$dsn = "$dbType:host=$host";
$dsn .= empty($port) ? "" : ";port=$port";
$dsn .= ";dbname=$dbName";

echo "DSN: $dsn\n";
