<?php
// admin/manage_quiz_results.php
include 'conn.php';
//include 'config.php';

$quizDB = $conn; // Assign $conn to $quizDB

// Function to get all quiz results
function getQuizResults($conn) {
    $sql = "SELECT * FROM tbl_result";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to delete a quiz result by ID
function deleteQuizResult($conn, $resultId) {
    $sql = "DELETE FROM tbl_result WHERE tbl_result_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$resultId]);
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_result'])) {
    $resultId = $_POST['result_id'];
    deleteQuizResult($quizDB, $resultId); // Use $quizDB instead of $conn
    header("Location: manage_quiz_results.php");
    exit();
}

// Get all quiz results from the database
$results = getQuizResults($quizDB); // Use $quizDB instead of $conn
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin.css">
    <title>Manage Quiz Results</title>
</head>
<body>
    <h1>Manage Quiz Results</h1>
    <h2>All Quiz Results</h2>
    <table>
        <tr>
            <th>Quiz Taker</th>
            <th>Year Section</th>
            <th>Total Score</th>
            <th>Date Taken</th>
            <th>Action</th>
        </tr>
        <?php foreach ($results as $result): ?>
            <tr>
                <td><?php echo htmlspecialchars($result['quiz_taker']); ?></td>
                <td><?php echo htmlspecialchars($result['year_section']); ?></td>
                <td><?php echo htmlspecialchars($result['total_score']); ?></td>
                <td><?php echo htmlspecialchars($result['date_taken']); ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="result_id" value="<?php echo $result['tbl_result_id']; ?>">
                        <button type="submit" name="delete_result">Delete</button>
                    </form>
                    <form method="GET" action="edit_quiz_result.php" style="display:inline;">
                        <input type="hidden" name="result_id" value="<?php echo $result['tbl_result_id']; ?>">
                        <button type="submit" name="edit_result">Edit</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
