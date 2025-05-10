<?php
session_start();

// Check if user is logged in and is admin
if (!isset($_SESSION['user_id']) || !isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../login.php");
    exit;
}

// Database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "epic_store";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle game deletion
if (isset($_POST['delete_game'])) {
    $game_id = $_POST['game_id'];
    $conn->query("DELETE FROM games WHERE id = $game_id");
    header("Location: games.php");
    exit;
}

// Handle game addition/update
if (isset($_POST['save_game'])) {
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $price = floatval($_POST['price']);
    $category = $conn->real_escape_string($_POST['category']);
    
    // Handle image upload
    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../img/games/";
        // Create directory if it doesn't exist
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $file_extension = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
        $new_filename = uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_filename;
        
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_path = "img/games/" . $new_filename;
        }
    }
    
    if (isset($_POST['game_id']) && !empty($_POST['game_id'])) {
        // Update existing game
        $game_id = intval($_POST['game_id']);
        $image_sql = $image_path ? ", image_url = '$image_path'" : "";
        $sql = "UPDATE games SET title = '$title', description = '$description', 
                price = $price, category = '$category' $image_sql WHERE id = $game_id";
    } else {
        // Add new game
        $sql = "INSERT INTO games (title, description, price, category, image_url) 
                VALUES ('$title', '$description', $price, '$category', '$image_path')";
    }
    
    if (!$conn->query($sql)) {
        die("Error saving game: " . $conn->error);
    }
    
    header("Location: games.php");
    exit;
}

// Get all games
$games = $conn->query("SELECT * FROM games ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Games - Epic Store Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <style>
        .admin-sidebar {
            background: #131313;
            min-height: 100vh;
            padding: 20px;
        }
        .admin-sidebar .nav-link {
            color: #fff;
            padding: 10px 15px;
            margin: 5px 0;
            border-radius: 5px;
        }
        .admin-sidebar .nav-link:hover {
            background: #ffb320;
            color: #131313;
        }
        .admin-sidebar .nav-link.active {
            background: #ffb320;
            color: #131313;
        }
        .content-area {
            padding: 20px;
        }
        .game-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .game-image {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 admin-sidebar">
                <div class="text-center mb-4">
                    <img src="../img/Epic Store logo.png" alt="Epic Store" style="max-width: 150px;">
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </a>
                    <a class="nav-link active" href="games.php">
                        <i class="fa fa-gamepad"></i> Manage Games
                    </a>
                    <a class="nav-link" href="users.php">
                        <i class="fa fa-users"></i> Manage Users
                    </a>
                    <a class="nav-link" href="comments.php">
                        <i class="fa fa-comments"></i> Manage Comments
                    </a>
                    <a class="nav-link" href="../logout.php">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 content-area">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Manage Games</h2>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addGameModal">
                        <i class="fa fa-plus"></i> Add New Game
                    </button>
                </div>

                <!-- Games List -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($game = $games->fetch_assoc()): ?>
                            <tr>
                                <td>
                                    <img src="../<?php echo htmlspecialchars($game['image_url']); ?>" 
                                         alt="<?php echo htmlspecialchars($game['title']); ?>" 
                                         class="game-image">
                                </td>
                                <td><?php echo htmlspecialchars($game['title']); ?></td>
                                <td><?php echo htmlspecialchars($game['category']); ?></td>
                                <td>$<?php echo htmlspecialchars($game['price']); ?></td>
                                <td>
                                    <button class="btn btn-sm btn-info edit-game" 
                                            data-game='<?php echo json_encode($game); ?>'>
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <form method="POST" class="d-inline" 
                                          onsubmit="return confirm('Are you sure you want to delete this game?');">
                                        <input type="hidden" name="game_id" value="<?php echo $game['id']; ?>">
                                        <button type="submit" name="delete_game" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add/Edit Game Modal -->
    <div class="modal fade" id="addGameModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Game</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="game_id" id="game_id">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="game_title" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" id="game_description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price" id="game_price" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category" id="game_category" required>
                                <option value="Action">Action</option>
                                <option value="Adventure">Adventure</option>
                                <option value="RPG">RPG</option>
                                <option value="Strategy">Strategy</option>
                                <option value="Sports">Sports</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Game Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="save_game" class="btn btn-primary">Save Game</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        // Handle edit game
        $('.edit-game').click(function() {
            const game = $(this).data('game');
            $('#game_id').val(game.id);
            $('#game_title').val(game.title);
            $('#game_description').val(game.description);
            $('#game_price').val(game.price);
            $('#game_category').val(game.category);
            $('.modal-title').text('Edit Game');
            $('#addGameModal').modal('show');
        });

        // Reset form when modal is closed
        $('#addGameModal').on('hidden.bs.modal', function() {
            $('#game_id').val('');
            $('#game_title').val('');
            $('#game_description').val('');
            $('#game_price').val('');
            $('#game_category').val('Action');
            $('.modal-title').text('Add New Game');
        });
    </script>
</body>
</html> 