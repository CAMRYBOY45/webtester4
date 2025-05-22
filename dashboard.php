<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Jika user belum login, arahkan ke login
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Work-Life Balance</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #4a6fa5;
            color: white;
            padding: 15px 30px;
            text-align: center;
        }

        .content {
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            color: #4a6fa5;
        }

        .welcome {
            font-size: 1.2rem;
            margin-top: 20px;
        }

        .logout-link {
            display: inline-block;
            margin-top: 30px;
            background-color: #4a6fa5;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .logout-link:hover {
            background-color: #3a5a80;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Work-Life Balance Dashboard</h1>
    </div>

    <div class="content">
        <h1>Welcome, <?php echo $_SESSION['email']; ?>!</h1>
        <p class="welcome">You have successfully logged in. Explore your dashboard and manage your balance.</p>
        
        <!-- Logout link -->
        <a href="logout.php" class="logout-link">Logout</a>
    </div>
</body>
</html>