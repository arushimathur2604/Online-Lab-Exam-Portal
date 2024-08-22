<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $questions = $_POST['questions'];
    $answers = $_POST['answers'];
    $numQuestions = count($questions);

    for ($i = 0; $i < $numQuestions; $i++) {
        $question = $questions[$i];
        $answer = $answers[$i];
        $sql = "INSERT INTO questions (question, answer) VALUES ('$question', '$answer')";

        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    echo "Questions added successfully.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Questions</title>
    <!-- Include Bootstrap CSS here -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container { margin-top: 50px; }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="display-4">Add Questions</h1>
        <form method="post" action="add_questions.php">
            <div id="question-forms">
                <div class="form-group">
                    <label for="question">Question:</label>
                    <input type="text" class="form-control" name="questions[]" placeholder="Enter Question" required>
                </div>
                <div class="form-group">
                    <label for="answer">Answer:</label>
                    <input type="text" class="form-control" name="answers[]" placeholder="Enter Answer" required>
                </div>
            </div>
            <button type="button" class="btn btn-primary" onclick="addQuestionForm()">Add Another Question</button>
            <button type="submit" class="btn btn-success">Submit Questions</button>
        </form>
    </div>

    <!-- JavaScript for adding dynamic question forms -->
    <script>
        function addQuestionForm() {
            var formDiv = document.createElement('div');
            formDiv.innerHTML = `
                <div class="form-group">
                    <label for="question">Question:</label>
                    <input type="text" class="form-control" name="questions[]" placeholder="Enter Question" required>
                </div>
                <div class="form-group">
                    <label for="answer">Answer:</label>
                    <input type="text" class="form-control" name="answers[]" placeholder="Enter Answer" required>
                </div>`;
            document.getElementById('question-forms').appendChild(formDiv);
        }
    </script>
</body>
</html>
