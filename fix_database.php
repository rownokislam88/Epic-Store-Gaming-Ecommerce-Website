<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "epic_store";

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db($dbname);

// Check if users table exists
$result = $conn->query("SHOW TABLES LIKE 'users'");
if ($result->num_rows == 0) {
    // Create users table if it doesn't exist
    $sql = "CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        is_admin TINYINT(1) DEFAULT 0,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB";
    
    if ($conn->query($sql) === TRUE) {
        echo "Users table created successfully<br>";
    } else {
        echo "Error creating users table: " . $conn->error . "<br>";
    }
} else {
    // Check if is_admin column exists
    $result = $conn->query("SHOW COLUMNS FROM users LIKE 'is_admin'");
    if ($result->num_rows == 0) {
        // Add is_admin column if it doesn't exist
        $sql = "ALTER TABLE users ADD COLUMN is_admin TINYINT(1) DEFAULT 0 AFTER password";
        if ($conn->query($sql) === TRUE) {
            echo "Added is_admin column to users table<br>";
        } else {
            echo "Error adding is_admin column: " . $conn->error . "<br>";
        }
    }
}

// Create admin user
$admin_email = "admin@epicstore.com";
$admin_password = "admin123";
$admin_name = "Admin User";
$hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);

// First, delete existing admin user if exists
$conn->query("DELETE FROM users WHERE email = '$admin_email'");

// Insert new admin user
$sql = "INSERT INTO users (full_name, email, password, is_admin) VALUES ('$admin_name', '$admin_email', '$hashed_password', 1)";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Admin user created successfully!</h2>";
    echo "<p>You can now log in with these credentials:</p>";
    echo "<ul>";
    echo "<li>Email: " . htmlspecialchars($admin_email) . "</li>";
    echo "<li>Password: " . htmlspecialchars($admin_password) . "</li>";
    echo "</ul>";
    echo "<p><a href='login.php'>Click here to go to login page</a></p>";
} else {
    echo "Error creating admin user: " . $conn->error . "<br>";
}

$conn->close();
?> 