<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server hostname
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "signup"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$username = $_POST['username'];
$email = $_POST['email'];
$contactnumber = $_POST['contactnumber'];
$position = $_POST['position']; // Corrected position
$password = $_POST['password']; // Corrected password

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL query to insert data into the database
$sql = "INSERT INTO users (lastname, firstname, username, email, contactnumber, password, position) VALUES ('$lastname', '$firstname', '$username', '$email', '$contactnumber', '$hashed_password', '$position')";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

    // Redirect to termsandcondition.php
    header("Location: termsandcondition.php");
    exit; // Ensure script execution stops after redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>