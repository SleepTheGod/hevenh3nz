<?php
$servername = "localhost";
$username = "hevenh3nz"; // Update with your MySQL username
$password = "hevenh3nz";     // Update with your MySQL password
$dbname = "hevenh3nz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
