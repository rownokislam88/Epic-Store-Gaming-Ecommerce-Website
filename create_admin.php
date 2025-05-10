<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "epic_store";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Admin credentials
$admin_email = "admin@epicstore.com";
$admin_password = "admin123";
$admin_name = "Admin User";

// Generate password hash
$hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);

// Check if admin already exists
$check_sql = "SELECT id FROM users WHERE email = '$admin_email'";
$result = $conn->query($check_sql);

if ($result->num_rows > 0) {
    // Update existing admin
    $sql = "UPDATE users SET password = '$hashed_password', is_admin = 1 WHERE email = '$admin_email'";
    if ($conn->query($sql) === TRUE) {
        echo "Admin user updated successfully!<br>";
        echo "Email: $admin_email<br>";
        echo "Password: $admin_password<br>";
    } else {
        echo "Error updating admin user: " . $conn->error;
    }
} else {
    // Create new admin
    $sql = "INSERT INTO users (full_name, email, password, is_admin) VALUES ('$admin_name', '$admin_email', '$hashed_password', 1)";
    if ($conn->query($sql) === TRUE) {
        echo "Admin user created successfully!<br>";
        echo "Email: $admin_email<br>";
        echo "Password: $admin_password<br>";
    } else {
        echo "Error creating admin user: " . $conn->error;
    }
}

$conn->close();
?> 