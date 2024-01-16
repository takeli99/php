<?php
    include 'conexion_bbdd.php';
    
    session_start();

    if (isset($_SESSION["user"])) {
        header("Location: login.html");
        exit();
    }


    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO profesores (Username, Full_Name, `E-mail`, Password) 
                VALUES ('$username', '$full_name', '$email', '$password')";

    $execution = mysqli_query($conexion, $query);

    header("Location: login.html");
?>
