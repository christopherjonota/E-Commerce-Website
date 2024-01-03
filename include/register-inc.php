<?php

if(isset($_POST['submit'])){
    require 'database.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['month'] . " " . $_POST['day'] . ", " . $_POST['year'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conpass = $_POST['conpass'];
    $fullname = $firstname . " " . $lastname;

    

    $insert = "INSERT INTO`users (FullName, Birthday, Email, Username, Password) VALUES 
    '$fullname', '$birthday', '$email', '$username', '$password')";
    $connection = mysqli_query($conn, $insert);
    header("Location: ../login.php");
}


