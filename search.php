<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="search.php">Search</a>
        <a href="contact.php">Contact Us</a>
    </nav>

    <div class="container">
        <h1>Search Page</h1>
        <form action="result.php" method="GET">
            <label for="search">Enter a search term:</label>
            <input type="text" id="search" name="search" placeholder="Type your search here">
            <button type="submit">Search</button>
        </form>
    </div>
</body>
</html>
