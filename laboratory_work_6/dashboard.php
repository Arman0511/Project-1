<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Retrieve the username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is your dashboard. You can add your dashboard content here.</p>
    <p><a href="logout.php">Logout</a></p>
</div>

</body>
</html>