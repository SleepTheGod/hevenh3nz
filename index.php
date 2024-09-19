<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HevenH3nz - Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>HevenH3nz</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="modding-guides.html">Modding Guides</a></li>
            <li><a href="lobby-hosting.html">Lobby Hosting</a></li>
            <li><a href="community.html">Community</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>
    <main>
        <section class="hero">
            <div class="hero-content">
                <h2>Welcome to HevenH3nz</h2>
                <p>Post your gamertags anonymously for modded lobbies!</p>
            </div>
        </section>
        <section class="content">
            <div class="post-form">
                <h3>Submit Your Gamertag</h3>
                <form action="submit-post.php" method="post">
                    <label for="gamertag">Gamertag:</label>
                    <input type="text" id="gamertag" name="gamertag" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div class="posts">
                <h3>Recent Posts</h3>
                <?php
                include 'db.php';

                $result = $conn->query("SELECT gamertag, timestamp FROM posts ORDER BY timestamp DESC");

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='post'>";
                        echo "<p><strong>Gamertag:</strong> " . htmlspecialchars($row['gamertag']) . "</p>";
                        echo "<p><em>Posted on: " . $row['timestamp'] . "</em></p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No posts yet.</p>";
                }

                $conn->close();
                ?>
            </div>
        </section>
    </main>
    <footer>
        <div class="social-media">
            <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
            <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
        </div>
        <div class="newsletter">
            <h3>Subscribe to Our Newsletter</h3>
            <form>
                <input type="email" placeholder="Your email">
                <button type="submit">Subscribe</button>
            </form>
        </div>
        <div class="legal">
            <a href="#">Terms of Service</a> | 
            <a href="#">Privacy Policy</a> | 
            <a href="#">Copyright Notice</a>
        </div>
    </footer>
</body>
</html>
