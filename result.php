<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="search.php">Search</a>
        <a href="contact.php">Contact Us</a>
    </nav>

    <div class="container">
        <h1>Search Results</h1>

        <?php
            if (isset($_GET['search'])) {
                $searchQuery = $_GET['search'];

                // Vulnerable reflection of user input
                echo "<div class='result'>You searched for: " . $searchQuery . "</div>";

                // Check if the user triggered an XSS attack with script tag
                if (strpos($searchQuery, '<script>alert(') !== false) {
                    echo "<script>alert('Congratulations! You found the XSS vulnerability! Here is your flag: FLAG{XSS_SK2509}');</script>";
                }
            } else {
                echo "<div class='result'>No search query provided.</div>";
            }
        ?>

        <div class="footer">TryHackMe XSS Challenge</div>
    </div>
</body>
</html>
