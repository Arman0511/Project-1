<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $resetEmail = $_POST['resetEmail'];
    $newPassword = $_POST['newPassword'];

    // Validate form data
    if (empty($resetEmail) || empty($newPassword) || empty($confirmNewPassword)) {
        // Display error message if any field is empty
        echo "<script>alert('Please fill in all fields');</script>";
    } elseif ($newPassword !== $confirmNewPassword) {
        // Display error message if passwords do not match
        echo "<script>alert('Passwords do not match');</script>";
    } else {
        // Connect to your database (Replace these variables with your actual database credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "changepassword";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to update password
        $sql = "UPDATE users SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $hashedPassword, $resetEmail);

        // Hash the new password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Password reset successfully');</script>";
        } else {
            echo "<script>alert('Error resetting password');</script>";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>