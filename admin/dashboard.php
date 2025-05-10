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

// Get counts for dashboard
$games_count = $conn->query("SELECT COUNT(*) as count FROM games")->fetch_assoc()['count'];
$users_count = $conn->query("SELECT COUNT(*) as count FROM users")->fetch_assoc()['count'];
$comments_count = $conn->query("SELECT COUNT(*) as count FROM comments")->fetch_assoc()['count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard - Epic Store</title>
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
        .dashboard-stats {
            padding: 20px;
        }
        .stat-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .stat-card h3 {
            margin: 0;
            color: #131313;
        }
        .stat-card p {
            margin: 10px 0 0;
            color: #666;
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
                    <a class="nav-link active" href="dashboard.php">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </a>
                    <a class="nav-link" href="games.php">
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
            <div class="col-md-9 col-lg-10 dashboard-stats">
                <h2 class="mb-4">Dashboard Overview</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="stat-card">
                            <h3><?php echo $games_count; ?></h3>
                            <p>Total Games</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <h3><?php echo $users_count; ?></h3>
                            <p>Total Users</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <h3><?php echo $comments_count; ?></h3>
                            <p>Total Comments</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="stat-card">
                            <h4>Recent Comments</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Comment</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $recent_comments = $conn->query("SELECT c.*, u.full_name FROM comments c 
                                                                        JOIN users u ON c.user_id = u.id 
                                                                        ORDER BY c.created_at DESC LIMIT 5");
                                        while($comment = $recent_comments->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".htmlspecialchars($comment['full_name'])."</td>";
                                            echo "<td>".htmlspecialchars($comment['comment'])."</td>";
                                            echo "<td>".date('M d, Y', strtotime($comment['created_at']))."</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-card">
                            <h4>Recent Games</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Game</th>
                                            <th>Price</th>
                                            <th>Added Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $recent_games = $conn->query("SELECT * FROM games ORDER BY created_at DESC LIMIT 5");
                                        while($game = $recent_games->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".htmlspecialchars($game['title'])."</td>";
                                            echo "<td>$".htmlspecialchars($game['price'])."</td>";
                                            echo "<td>".date('M d, Y', strtotime($game['created_at']))."</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html> 