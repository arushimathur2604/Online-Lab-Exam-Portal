<!DOCTYPE html>
<html>
<head>
    <title>welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .user-links {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .user-links a {
            margin: 10px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
        }
        .user-links a:hover {
            background-color: #0056b3;
        }
        .auth-links {
            display: none;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        .auth-links a {
            margin: 5px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
        }
        .auth-links a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Welcome To Online Lab Exam Portal</h1>
    <div class="user-links">
        <a href="#" id="adminLink">Admin</a>
        <a href="#" id="facultyLink">Faculty</a>
        <a href="#" id="studentLink">Student</a>
    </div>
    <div id="authLinksAdmin" class="auth-links">
        <a href="register_admin.php">Admin Registration</a>
        <a href="login_admin.php">Admin Login</a>
    </div>
    <div id="authLinksFaculty" class="auth-links">
        <a href="register_faculty.php">Faculty Registration</a>
        <a href="login_faculty.php">Faculty Login</a>
    </div>
    <div id="authLinksStudent" class="auth-links">
        <a href="register_student.php">Student Registration</a>
        <a href="login_student.php">Student Login</a>
    </div>
    <script>
        document.getElementById('adminLink').addEventListener('click', function() {
            document.getElementById('authLinksAdmin').style.display = 'flex';
            document.getElementById('authLinksFaculty').style.display = 'none';
            document.getElementById('authLinksStudent').style.display = 'none';
        });
        document.getElementById('facultyLink').addEventListener('click', function() {
            document.getElementById('authLinksAdmin').style.display = 'none';
            document.getElementById('authLinksFaculty').style.display = 'flex';
            document.getElementById('authLinksStudent').style.display = 'none';
        });
        document.getElementById('studentLink').addEventListener('click', function() {
            document.getElementById('authLinksAdmin').style.display = 'none';
            document.getElementById('authLinksFaculty').style.display = 'none';
            document.getElementById('authLinksStudent').style.display = 'flex';
        });
    </script>
</body>
</html>
