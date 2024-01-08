<?php
    $conexion = mysqli_connect("localhost", "root", "", "tu_basede_datos");
    
    // Verificar la conexión
    if (!$conexion) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }
    
    $query_alumnos = "SELECT * FROM alumnos";
    $result_alumnos = mysqli_query($conexion, $query_alumnos);
    
    $query_profesores = "SELECT * FROM profesores";
    $result_profesores = mysqli_query($conexion, $query_profesores);
    
    mysqli_close($conexion);
    
?>