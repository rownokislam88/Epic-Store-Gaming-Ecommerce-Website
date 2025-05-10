-- Create database if not exists
CREATE DATABASE IF NOT EXISTS epic_store;
USE epic_store;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    is_admin TINYINT(1) DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Create games table
CREATE TABLE IF NOT EXISTS games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    category VARCHAR(50),
    image_url VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Create comments table
CREATE TABLE IF NOT EXISTS comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    game_id INT NOT NULL,
    comment TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_game FOREIGN KEY (game_id) REFERENCES games(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Insert initial admin user (password: admin123)
INSERT INTO users (full_name, email, password, is_admin) VALUES 
('Admin User', 'admin@epicstore.com', '$2y$10$YourNewSecureHashHere', 1);

-- Insert sample games
INSERT INTO games (title, description, price, category, image_url) VALUES
('The Witcher 3: Wild Hunt', 'An epic open-world RPG with a compelling story and memorable characters.', 29.99, 'RPG', 'img/games/witcher3.jpg'),
('Red Dead Redemption 2', 'A western-themed action-adventure game set in the late 1800s.', 39.99, 'Action', 'img/games/rdr2.jpg'),
('Cyberpunk 2077', 'An open-world action RPG set in the futuristic Night City.', 49.99, 'RPG', 'img/games/cyberpunk.jpg'),
('God of War Ragnarök', 'The epic conclusion to Kratos and Atreus'' journey through Norse mythology.', 59.99, 'Action', 'img/games/gow.jpg'),
('Elden Ring', 'A new fantasy action-RPG from the creators of Dark Souls.', 54.99, 'RPG', 'img/games/eldenring.jpg'); 