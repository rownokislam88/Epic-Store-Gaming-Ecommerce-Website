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

// Handle comment deletion
if (isset($_POST['delete_comment'])) {
    $comment_id = $_POST['comment_id'];
    $conn->query("DELETE FROM comments WHERE id = $comment_id");
    header("Location: comments.php");
    exit;
}

// Get all comments with user and game information
$comments = $conn->query("SELECT c.*, u.full_name, g.title as game_title 
                         FROM comments c 
                         JOIN users u ON c.user_id = u.id 
                         JOIN games g ON c.game_id = g.id 
                         ORDER BY c.created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Comments - Epic Store Admin</title>
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
        .comment-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
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
                    <a class="nav-link" href="games.php">
                        <i class="fa fa-gamepad"></i> Manage Games
                    </a>
                    <a class="nav-link" href="users.php">
                        <i class="fa fa-users"></i> Manage Users
                    </a>
                    <a class="nav-link active" href="comments.php">
                        <i class="fa fa-comments"></i> Manage Comments
                    </a>
                    <a class="nav-link" href="../logout.php">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 content-area">
                <h2 class="mb-4">Manage Comments</h2>

                <!-- Comments List -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Game</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($comment = $comments->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($comment['full_name']); ?></td>
                                <td><?php echo htmlspecialchars($comment['game_title']); ?></td>
                                <td><?php echo htmlspecialchars($comment['comment']); ?></td>
                                <td><?php echo date('M d, Y H:i', strtotime($comment['created_at'])); ?></td>
                                <td>
                                    <form method="POST" class="d-inline" 
                                          onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                        <input type="hidden" name="comment_id" value="<?php echo $comment['id']; ?>">
                                        <button type="submit" name="delete_comment" class="btn btn-sm btn-danger">
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

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html> 