<?php
include ('../conn/conn.php'); // Adjust path as necessary

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $faculty_id = $_POST['faculty_id']; // Get faculty ID
    $question = $_POST['question'];
    $logic = $_POST['logic'];

    try {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO questions (faculty_id, question, logic) VALUES (:faculty_id, :question, :logic)");

        // Bind parameters
        $stmt->bindParam(':faculty_id', $faculty_id);
        $stmt->bindParam(':question', $question);
        $stmt->bindParam(':logic', $logic);

        // Execute the query
        if ($stmt->execute()) {
            echo "New question added successfully";
        } else {
            echo "Error: Unable to add question";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
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
        <form method="post" action="add-question.php"> <!-- corrected action attribute -->
            <div id="question-forms">
                <div class="form-group">
                    <label for="faculty_id">Faculty ID:</label>
                    <input type="text" class="form-control" name="faculty_id" placeholder="Enter Faculty ID" required>
                </div>
                <div class="form-group">
                    <label for="question">Question:</label>
                    <input type="text" class="form-control" name="question" placeholder="Enter Question" required>
                </div>
                <div class="form-group">
                    <label for="logic">Logic:</label>
                    <input type="text" class="form-control" name="logic" placeholder="Enter Logic" required>
                </div>
            </div>
            <button type="button" class="btn btn-primary" onclick="addQuestionForm()">Add Another Question</button>
            <button type="submit" class="btn btn-success">Submit Question</button>
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
