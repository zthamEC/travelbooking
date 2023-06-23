<?php
$servername = "localhost";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$enteredUsername = $_POST["username"];
$enteredPassword = $_POST["password"];

// Query to check if the username and password exist in the database
$sql = "SELECT * FROM users WHERE username = '$enteredUsername' AND password = '$enteredPassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Successful login
    echo "Login successful!";
} else {
    // Invalid username or password
    echo "Invalid username or password.";
}

$conn->close();
?>
