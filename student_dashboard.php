<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'student') {
    header("Location: login_student.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <!-- Include Bootstrap CSS here -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Bahnschrift Condensed', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
            margin-top: 100px;
        }
        .btn-custom {
            width: 200px;
            height: 50px;
            margin: 20px;
            font-size: 18px;
            border-radius: 25px;
        }
        .btn-normal {
            background-color: green;
            color: white;
        }
        .btn-normal:hover {
            background-color: darkgreen;
        }
        .btn-quiz {
            background-color: blue;
            color: white;
        }
        .btn-quiz:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="display-4">Welcome, Student</h1>
        <p>Select an option to proceed:</p>
        <a href="student_exam.php" class="btn btn-custom btn-normal">Theory Exam</a>
        <a href="take-quiz.php" class="btn btn-custom btn-quiz">Quiz</a>
    </div>
</body>
</html>