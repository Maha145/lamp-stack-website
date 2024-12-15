<?php
$servername = "localhost";
$username = "web_user";
$password = "StrongPassword123";  
$dbname = "web_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT NOW() AS `current_time`");
$row = $result->fetch_assoc();

echo "Hello World! <br>";
echo "Your IP Address: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Current Time: " . $row['current_time'];

$conn->close();
?>
