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

// Process message submission
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['message'])) {
    $message = htmlspecialchars($_GET['message']);
    $stmt = $conn->prepare("INSERT INTO messages (message) VALUES (?)");

    if ($stmt) {
        $stmt->bind_param("s", $message);
        if (!$stmt->execute()) {
            echo "Failed to send message.";
        }
        $stmt->close();
    } else {
        echo "Failed to send message.";
    }
}

$conn->close();
?>