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

// Drop existing tables if they exist
$tables = ['comments', 'games', 'users'];
foreach ($tables as $table) {
    $conn->query("DROP TABLE IF EXISTS $table");
}

// Create users table
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

// Create games table
$sql = "CREATE TABLE games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    category VARCHAR(50),
    image_url VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB";

if ($conn->query($sql) === TRUE) {
    echo "Games table created successfully<br>";
} else {
    echo "Error creating games table: " . $conn->error . "<br>";
}

// Create comments table
$sql = "CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    game_id INT NOT NULL,
    comment TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_game FOREIGN KEY (game_id) REFERENCES games(id) ON DELETE CASCADE
) ENGINE=InnoDB";

if ($conn->query($sql) === TRUE) {
    echo "Comments table created successfully<br>";
} else {
    echo "Error creating comments table: " . $conn->error . "<br>";
}

// Create admin user
$admin_email = "admin@epicstore.com";
$admin_password = "admin123";
$admin_name = "Admin User";
$hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);

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