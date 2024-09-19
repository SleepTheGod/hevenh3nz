<?php
include 'db.php'; // Ensure this file contains the correct database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gamertag = $_POST['gamertag'];
    $featured = isset($_POST['featured']) ? 1 : 0; // Check if 'featured' checkbox is set

    if (!empty($gamertag)) {
        // Prepare SQL statement with 'featured' field
        $stmt = $conn->prepare("INSERT INTO posts (gamertag, featured) VALUES (?, ?)");
        $stmt->bind_param("si", $gamertag, $featured);

        if ($stmt->execute()) {
            echo "New post created successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Gamertag is required.";
    }

    $conn->close();
    header("Location: index.php"); // Redirect back to the main page
    exit(); // Ensure that no further code is executed after the redirect
}
?>
