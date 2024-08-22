<?php
$servername = "localhost"; // Server where MySQL is running (usually localhost)
$username = "root"; // MySQL username
$password = ""; // MySQL password (empty for localhost by default)
$dbname = "online_quiz_db"; // Name of the database you want to connect to

try {
    // Create a new PDO instance to connect to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set PDO to throw exceptions on errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: Set the character set to UTF-8
    $conn->exec("SET NAMES utf8mb4");

    echo "Connected successfully"; // Optional: Output message if connection succeeds
} catch (PDOException $e) {
    // Catch any PDO exceptions and display an error message
    echo "Connection failed: " . $e->getMessage();
}
?>
