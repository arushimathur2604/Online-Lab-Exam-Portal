<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_exam_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Define the admin registration key
define('ADMIN_REGISTRATION_KEY', 'vignan@examportal'); // Change 'your_secure_key_here' to your actual secure key
?>
