<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gamertag = $_POST['gamertag'];

    if (!empty($gamertag)) {
        $stmt = $conn->prepare("INSERT INTO posts (gamertag) VALUES (?)");
        $stmt->bind_param("s", $gamertag);

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
    header("Location: index.html"); // Redirect back to the main page
}
?>
