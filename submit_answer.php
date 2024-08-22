<?php
include('conn/conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id']; // Get student ID
    $question_id = $_POST['question_id'];
    $answer = $_POST['answer'];
    $is_correct = $_POST['is_correct'];
    $score = $_POST['score'];

    $sql = "INSERT INTO answers (student_id, question_id, answer, is_correct, score) VALUES ('$student_id', '$question_id', '$answer', '$is_correct', '$score')";
    if (mysqli_query($conn, $sql)) {
        echo "Answer submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit Answer</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Submit Answer</h2>
        <form action="submit_answer.php" method="POST">
            <label for="student_id">Student ID:</label>
            <input type="text" id="student_id" name="student_id" required><br>

            <label for="question_id">Question ID:</label>
            <input type="text" id="question_id" name="question_id" required><br>

            <label for="answer">Answer:</label>
            <textarea id="answer" name="answer" required></textarea><br>

            <label for="is_correct">Is Correct:</label>
            <input type="checkbox" id="is_correct" name="is_correct" value="1"><br>

            <label for="score">Score:</label>
            <input type="text" id="score" name="score" required><br>

            <input type="submit" value="Submit Answer">
        </form>
    </div>
</body>
</html>
