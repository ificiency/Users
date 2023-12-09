<?php
require_once '../models/database_connection.php';

// Create table SQL
$createTableSql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
)";

// Insert data SQL
$insertSql = "INSERT INTO users (name, email) VALUES 
('John Doe', 'john@example.com'),
('Jane Roe', 'jane@example.com'),
('Alice Smith', 'alice@example.com')";

// Create a new database connection
$database = new Database();
$db = $database->getConnection();

// Execute the create table query
if ($db->query($createTableSql)) {
    echo "Table users created successfully\n";
} else {
    echo "Error creating table: " . $db->error;
}

// Execute the insert data query
if ($db->query($insertSql)) {
    echo "New records created successfully\n";
} else {
    echo "Error: " . $insertSql . "\n" . $db->error;
}

$db->close();
?>
