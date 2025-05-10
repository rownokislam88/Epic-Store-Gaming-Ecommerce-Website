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

// Check if games table exists
$result = $conn->query("SHOW TABLES LIKE 'games'");
if ($result->num_rows == 0) {
    // Create games table if it doesn't exist
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
        exit;
    }
}

// Game details
$title = "GTA VI";
$description = "GTA VI is an action-adventure game set in a vibrant Vice City, offering intense heists, deep storytelling, and expansive open-world gameplay with stunning graphics and immersive, dynamic environments.";
$price = 69.99;
$category = "Action-Adventure";
$image_url = "img/games/gta6.jpg";

// Prepare and execute the insert statement
$stmt = $conn->prepare("INSERT INTO games (title, description, price, category, image_url) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssdss", $title, $description, $price, $category, $image_url);

if ($stmt->execute()) {
    echo "<h2>Game added successfully!</h2>";
    echo "<p>GTA VI has been added to the store.</p>";
    echo "<p><a href='game-review.php'>View all games</a></p>";
} else {
    echo "Error adding game: " . $stmt->error;
}

$stmt->close();
$conn->close();
?> 