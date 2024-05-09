<?php
// Connect to the database (replace placeholders with actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $last_name = $_POST["last_name"];
    $first_name = $_POST["first_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $contact_number = $_POST["contact_number"];
    $password = $_POST["password"];
    $position = $_POST["position"];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO customers (last_name, first_name, username, email, contact_number, password, position)
    VALUES ('$last_name', '$first_name', '$username', '$email', '$contact_number', '$hashed_password', '$position')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>