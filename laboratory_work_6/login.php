<?php
session_start();

// Function to redirect to front.php
function redirectToFront() {
    header("Location: front.php");
    exit; // Ensure that script execution stops after redirection
}

// Encryption key
$encryptionKey = "YourEncryptionKeyHere";

// Function to decrypt password
function decryptPassword($encryptedPassword, $encryptionKey) {
    return openssl_decrypt($encryptedPassword, 'AES-128-ECB', $encryptionKey);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'] ?? '';
    $encryptedPassword = $_POST['password'] ?? '';

    // Validate form data
    if (empty($username) || empty($encryptedPassword)) {
        echo "Please enter both username and password";
    } else {
        // Simulated user credentials (replace with your authentication logic)
        $validUser = 'user';
        $validPassword = 'password'; // Plain text password

        // Check if username exists
        if ($username === $validUser) {
            // Decrypt the password
            $decryptedPassword = decryptPassword($encryptedPassword, $encryptionKey);

            // Check if password matches
            if ($decryptedPassword === $validPassword) {
                // Authentication successful
                // Redirect to the dashboard or any other page
                redirectToFront();
            } else {
                // Authentication failed
                echo "Invalid username or password";
            }
        } else {
            // User does not exist
            echo "Invalid username or password";
        }
    }
}

// Function to directly access front.php
function accessFront() {
    redirectToFront();
}

// Call the function to directly access front.php
accessFront();
?>