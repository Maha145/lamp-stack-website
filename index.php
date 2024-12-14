<?php
// Database connection settings
$servername = "localhost";
$username = "web_user";
$password = "StrongPassword123";  // Replace with your correct password
$dbname = "web_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch the current time
$result = $conn->query("SELECT NOW() AS `current_time`");
$row = $result->fetch_assoc();

// Display content
echo "Hello World! <br>";
echo "Your IP Address: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Current Time: " . $row['current_time'];

// Close connection
$conn->close();
?>
