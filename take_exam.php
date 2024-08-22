<?php
include('conn/conn.php');

// Fetch questions for the exam
$questions = mysqli_query($conn, "SELECT * FROM questions");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Take Exam</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Take Exam</h2>
        <form action="submit_answer.php" method="POST">
            <?php while ($row = mysqli_fetch_assoc($questions)) { ?>
            <div>
                <p><?php echo $row['question']; ?></p>
                <textarea name="answer" required></textarea>
                <input type="hidden" name="question_id" value="<?php echo $row['id']; ?>">
            </div>
            <?php } ?>
            <input type="hidden" name="student_id" value="/* Current student's ID */">
            <input type="submit" value="Submit Exam">
        </form>
    </div>
</body>
</html>
