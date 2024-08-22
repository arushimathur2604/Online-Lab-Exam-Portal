<?php
include 'config.php';
session_start();

$student_id = $_SESSION['user_id'];
$question_id = null;

// Check if the student already has a question assigned
$sql = "SELECT question_id FROM student_questions WHERE student_id = $student_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $question_id = $row['question_id'];
} else {
    // Assign a random question to the student
    $sql = "SELECT id FROM questions ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $question_id = $row['id'];
        
        // Insert the assignment into student_questions table
        $sql = "INSERT INTO student_questions (student_id, question_id) VALUES ($student_id, $question_id)";
        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Fetch the question details
$question = "";
if ($question_id !== null) {
    $sql = "SELECT question FROM questions WHERE id = $question_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $question = $row['question'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Exam</title>
    <!-- Include Bootstrap CSS here -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container { margin-top: 50px; }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="display-4">Exam Question</h1>
        <?php if ($question != ""): ?>
            <div class="card">
                <div class="card-header bg-success text-white">
                    Your Question
                </div>
                <div class="card-body">
                    <p><?php echo $question; ?></p>
                    <form method="post" action="submit_answer.php">
                        <div class="form-group">
                            <label for="answer">Your Answer:</label>
                            <textarea class="form-control" id="answer" name="answer" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit Answer</button>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <p>No questions available at the moment.</p>
        <?php endif; ?>
    </div>
</body>
</html>
