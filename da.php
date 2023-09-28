<?php
// Database connection
$servername = "localhost";
$username = "martin";
$password = "tinez10";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check user credentials
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User found, redirect to a welcome page
    header("Location: welcome.php");
    exit();
} else {
    // Invalid credentials, redirect back to the login page
    header("Location: login.php?error=1");
    exit();
}

$conn->close();
?>
