<?php
// Database connection credentials
$servername = "localhost";
$username = "alxihsql_4chan";
$password = "solankidhruv394";
$dbname = "alxihsql_4chan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch messages from the database
$sql = "SELECT timestamp, message FROM messages ORDER BY id ASC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>[" . $row['timestamp'] . "] " . htmlspecialchars($row['message']) . "</div>";
    }
} else {
    echo "<div>No messages yet.</div>";
}

$conn->close();
?>