<?php
    include 'conexion_bbdd.php';
    
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $query_select = "SELECT * FROM profesores WHERE Username='$username' AND Password='$password'";
        $result_select = mysqli_query($conexion, $query_select);
    
        if ($row = mysqli_fetch_assoc($result_select)) {
            $_SESSION["user"] = $username;
            ob_start(); 
            header("Location: meterAlumno.php");
            ob_end_flush(); 
            exit();
        } else {
            ob_start(); 
            echo "Login fallido. Usuario no encontrado.";
            header("Location: register.html");
            ob_end_flush();
            exit();
        }
    } else {
        echo "Error: No se recibieron datos del formulario.";
    }
    
    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
?>
