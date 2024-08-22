<?php
// admin/manage_theory_results.php
include 'config.php';

// Function to get all theory results
function getTheoryResults($conn) {
    $results = array();
    $sql = "SELECT * FROM answers";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    }
    return $results;
}

// Function to delete a theory result by ID
function deleteTheoryResult($conn, $resultId) {
    $sql = "DELETE FROM answers WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $resultId);
    $stmt->execute();
    $stmt->close();
}

// Handle form submissions for deleting
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_result'])) {
    // Check if result_id is set and is numeric
    if(isset($_POST['result_id']) && is_numeric($_POST['result_id'])) {
        $resultId = $_POST['result_id'];
        deleteTheoryResult($conn, $resultId);
        header("Location: manage_theory_results.php");
        exit();
    }
}

// Handle form submissions for editing
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit_result'])) {
    // Check if result_id is set and is numeric
    if(isset($_GET['result_id']) && is_numeric($_GET['result_id'])) {
        $resultId = $_GET['result_id'];
        header("Location: edit_theory_result.php?result_id=" . $resultId);
        exit();
    }
}

// Get all theory results from the database
$results = getTheoryResults($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin.css">
    <title>Manage Theory Results</title>
</head>
<body>
    <h1>Manage Theory Results</h1>
    <h2>All Theory Results</h2>
    <table>
        <tr>
            <th>Student</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Is Correct</th>
            <th>Score</th>
            <th>Action</th>
        </tr>
        <?php foreach ($results as $result): ?>
            <tr>
                <td><?php echo htmlspecialchars($result['student_id']); ?></td>
                <td><?php echo htmlspecialchars($result['question_id']); ?></td>
                <td><?php echo htmlspecialchars($result['answer']); ?></td>
                <td><?php echo htmlspecialchars($result['is_correct']); ?></td>
                <td><?php echo htmlspecialchars($result['score']); ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="result_id" value="<?php echo $result['id']; ?>">
                        <button type="submit" name="delete_result">Delete</button>
                    </form>
                    <form method="GET" action="edit_theory_result.php" style="display:inline;">
                        <input type="hidden" name="result_id" value="<?php echo $result['id']; ?>">
                        <button type="submit" name="edit_result">Edit</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
