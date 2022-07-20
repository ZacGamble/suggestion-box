<?php
require('connection.php');

if (isset($_POST['submit'])) {
    $firstName = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $suggestion = htmlspecialchars($_POST['suggestion']);
    $stmt = $conn->prepare("INSERT INTO suggestions (name, email, suggestion) VALUES (?, ?, ?)");
    $stmt->bind_param(
        "sss",
        $firstName,
        $email,
        $suggestion
    );

        $stmt->execute();
        $conn->close();
    }
    
        if(!empty($_POST)){
        header("location:index.php");
        }
