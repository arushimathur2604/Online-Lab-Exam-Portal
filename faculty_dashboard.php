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
    <meta name="description" content="Online Lab Exam portal for teachers to create and manage quizzes and theory questions.">
    <title>Teacher Dashboard - Online Exam Portal</title>
    <link rel="stylesheet" href="path/to/bootstrap.css"> <!-- Add the correct path to your Bootstrap CSS -->
    <!-- Add any other CSS files you need here -->
</head>
<body>
    <?php
    include ('./partials/header.php');
    include ('./conn/conn.php');
    include ('./partials/modal.php');
    ?>

    <div class="main">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="./quiz.php">Quiz</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse mr-4" id="navbarSupportedContent">
                <div class="ml-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <head><center><font size=18 >Online Exam Portal</font></center></head>
 <h1><font size=18 ><center>Vignan Institute of Technology And Science (Autonomous)</center></font></h1>
        <div id="pills-home" class="text-center mt-5">
            <h2 id="welcome-teacher">Welcome Teacher!</h2>
            <small>This is a teacher area where you can add quiz and theory questions.</small>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Quiz</h5>
                                <p class="card-text">Create and manage quizzes.</p>
                                <a href="./quiz.php" class="btn btn-primary">Click To Add Quiz questions</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Theory</h5>
                                <p class="card-text">Add and manage theory questions.</p>
                                <a href="./theory.php" class="btn btn-primary">Click To Add Theory Questions</a>
                            </div>
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
