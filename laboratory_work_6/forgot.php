<?php
// Function to redirect to front.php
function redirectToFront() {
    header("Location: front.php");
    exit; // Ensures that no further code is executed after redirection
}

// Check if the form is submitted for login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include('config.php');
    
    // Process login
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // You should hash the password and compare with the hashed password stored in the database
        // For demonstration purpose, I'm not hashing the password here
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) == 1) {
            // Login successful
            echo "Login successful";
            redirectToFront(); // Redirect to front.php
        } else {
            // Login failed
            echo "Login failed. Please check your username and password.";
        }
    }
}

// Process creating a new account
if (isset($_POST['new_username']) && isset($_POST['new_password'])) {
    // Include database connection file
    include('config.php');

    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];

    // You should hash the password before storing it in the database
    // For demonstration purpose, I'm not hashing the password here
    $sql = "INSERT INTO users (username, password) VALUES ('$new_username', '$new_password')";
    if (mysqli_query($conn, $sql)) {
        echo "New account created successfully";
        redirectToFront(); // Redirect to front.php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Process resetting password
if (isset($_POST['reset_username']) && isset($_POST['reset_password'])) {
    // Include database connection file
    include('config.php');

    $reset_username = $_POST['reset_username'];
    $reset_password = $_POST['reset_password'];

    // You should hash the password before updating it in the database
    // For demonstration purpose, I'm not hashing the password here
    $sql = "UPDATE users SET password='$reset_password' WHERE username='$reset_username'";
    if (mysqli_query($conn, $sql)) {
        echo "Password reset successfully";
        redirectToFront(); // Redirect to front.php
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>