<?php
include 'config.php';
session_start();

if ($_SESSION['role'] != 'faculty') {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Manage quiz and theory questions.">
    <title>Manage Questions - Online Exam Portal</title>
    <link rel="stylesheet" href="path/to/bootstrap.css"> <!-- Add the correct path to your Bootstrap CSS -->
    <!-- Add any other CSS files you need here -->
</head>
<body>
    <?php include ('./partials/header.php'); ?>

    <div class="main">
        <div class="container mt-5">
            <h2 class="text-center mb-4">Manage Questions</h2>
            <!-- Your manage questions content here -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Quiz Questions</h5>
                            <p class="card-text">View and edit quiz questions.</p>
                            <a href="./manage_quiz_questions.php" class="btn btn-primary">Manage Quiz Questions</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Theory Questions</h5>
                            <p class="card-text">View and edit theory questions.</p>
                            <a href="./manage_theory_questions.php" class="btn btn-primary">Manage Theory Questions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include ('./partials/footer.php') ?>
    <script src="path/to/jquery.js"></script> <!-- Add the correct path to your jQuery -->
    <script src="path/to/bootstrap.js"></script> <!-- Add the correct path to your Bootstrap JS -->
    <!-- Add any other JS files you need here -->
</body>
</html>
