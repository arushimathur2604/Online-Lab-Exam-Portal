<?php
include 'config.php';
session_start();

if ($_SESSION['role'] != 'faculty') {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question = $_POST['question'];
    $logic = $_POST['logic'];
    $faculty_id = $_SESSION['user_id'];

    $sql = "INSERT INTO questions (faculty_id, question, logic) VALUES ('$faculty_id', '$question', '$logic')";

    if ($conn->query($sql) === TRUE) {
        echo "Question created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post">
    Question: <textarea name="question" required></textarea><br>
    Logic: <textarea name="logic" required></textarea><br>
    <input type="submit" value="Create Question">
</form>
