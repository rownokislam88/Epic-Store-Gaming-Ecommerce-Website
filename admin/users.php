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

// Handle user deletion
if (isset($_POST['delete_user'])) {
    $user_id = $_POST['user_id'];
    // Don't allow deleting the last admin
    $admin_count = $conn->query("SELECT COUNT(*) as count FROM users WHERE is_admin = 1")->fetch_assoc()['count'];
    $is_admin = $conn->query("SELECT is_admin FROM users WHERE id = $user_id")->fetch_assoc()['is_admin'];
    
    if ($admin_count > 1 || !$is_admin) {
        $conn->query("DELETE FROM users WHERE id = $user_id");
    }
    header("Location: users.php");
    exit;
}

// Handle admin status toggle
if (isset($_POST['toggle_admin'])) {
    $user_id = $_POST['user_id'];
    $current_status = $conn->query("SELECT is_admin FROM users WHERE id = $user_id")->fetch_assoc()['is_admin'];
    $new_status = $current_status ? 0 : 1;
    
    // Don't allow removing the last admin
    if ($new_status == 0) {
        $admin_count = $conn->query("SELECT COUNT(*) as count FROM users WHERE is_admin = 1")->fetch_assoc()['count'];
        if ($admin_count > 1) {
            $conn->query("UPDATE users SET is_admin = $new_status WHERE id = $user_id");
        }
    } else {
        $conn->query("UPDATE users SET is_admin = $new_status WHERE id = $user_id");
    }
    header("Location: users.php");
    exit;
}

// Get all users
$users = $conn->query("SELECT * FROM users ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Users - Epic Store Admin</title>
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
        .user-card {
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
                    <a class="nav-link active" href="users.php">
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
                <h2 class="mb-4">Manage Users</h2>

                <!-- Users List -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Joined Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($user = $users->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($user['full_name']); ?></td>
                                <td><?php echo htmlspecialchars($user['email']); ?></td>
                                <td>
                                    <?php if($user['is_admin']): ?>
                                        <span class="badge badge-primary">Admin</span>
                                    <?php else: ?>
                                        <span class="badge badge-secondary">User</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo date('M d, Y', strtotime($user['created_at'])); ?></td>
                                <td>
                                    <form method="POST" class="d-inline">
                                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                        <button type="submit" name="toggle_admin" class="btn btn-sm btn-info">
                                            <?php if($user['is_admin']): ?>
                                                <i class="fa fa-user-minus"></i>
                                            <?php else: ?>
                                                <i class="fa fa-user-plus"></i>
                                            <?php endif; ?>
                                        </button>
                                    </form>
                                    <form method="POST" class="d-inline" 
                                          onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                        <button type="submit" name="delete_user" class="btn btn-sm btn-danger">
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