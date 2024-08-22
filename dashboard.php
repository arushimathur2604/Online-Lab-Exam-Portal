<?php
include 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$role = $_SESSION['role'];

echo "Welcome, " . $role;

if ($role == 'admin') {
    echo "<a href='admin_dashboard.php'>Manage Users</a>";
} elseif ($role == 'faculty') {
    echo "<a href='create_question.php'>create question</a>";
} elseif ($role == 'student') {
    echo "<a href='student_dashboard.php'>Take Exam</a>";
}
?>
