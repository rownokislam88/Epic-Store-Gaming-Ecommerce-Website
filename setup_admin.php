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

// First, try to delete existing admin user if exists
$conn->query("DELETE FROM users WHERE email = '$admin_email'");

// Create new admin user
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
    echo "Error creating admin user: " . $conn->error;
}

$conn->close();
?> 