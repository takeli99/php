<?php
    include 'conexion_bbdd.php';

    $username = $_POST['username']; 
    $full_name = $_POST['full_name']; 
    $email = $_POST['email']; 
    $password = $_POST['password']; 

    $query = "INSERT INTO alumnos (Username, Full_Name, `E-mail`, Password) 
                VALUES ('$username', '$full_name', '$email', '$password')";

    $execution = mysqli_query($conexion, $query);

    header("Location:meterAlumno.php");
?>
