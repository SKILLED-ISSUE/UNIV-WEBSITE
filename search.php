<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pup-website"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get search query from form
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Check if the search query is not empty
if (!empty($query)) {
    // Prevent SQL injection
    $safe_query = $conn->real_escape_string($query);

    // SQL query to search for the term in your database
    $sql = "SELECT * FROM articles WHERE title LIKE '%$safe_query%' OR content LIKE '%$safe_query%'"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Highlight search terms in title and content
            $highlighted_title = preg_replace("/($safe_query)/i", "<strong>$1</strong>", htmlspecialchars($row['title']));
            $highlighted_content = preg_replace("/($safe_query)/i", "<strong>$1</strong>", htmlspecialchars($row['content']));
            
            // Assuming you have a 'link' column in your database that contains the URLs
            $url = htmlspecialchars($row['link']); // Get the URL from the 'link' column
            
            echo "<div class='result-item'>";
            // Make the title an anchor element with the href set to the URL from the database
            echo "<h3><a href='" . $url . "'>" . $highlighted_title . "</a></h3>";
            echo "<p>" . $highlighted_content . "</p>"; // Highlighted content
            echo "</div>";
        }
    } else {
        echo "No results found.";
    }
} else {
    // Do nothing or load default content if the query is empty
    // This can be a placeholder message, default content, or simply leaving it empty
    echo "<!-- No search performed -->";
}

$conn->close();
?>