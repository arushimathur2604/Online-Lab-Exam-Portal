CREATE DATABASE lab_exam_portal;

USE lab_exam_portal;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'faculty', 'student') NOT NULL
);

CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    faculty_id INT,
    question TEXT NOT NULL,
    logic TEXT NOT NULL,
    FOREIGN KEY (faculty_id) REFERENCES users(id)
);

CREATE TABLE answers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    question_id INT,
    answer TEXT NOT NULL,
    is_correct BOOLEAN,
    score INT,
    FOREIGN KEY (student_id) REFERENCES users(id),
    FOREIGN KEY (question_id) REFERENCES questions(id)
);
