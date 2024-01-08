<?php
    $conexion = mysqli_connect("localhost", "root", "", "alumnos");
    
    if (!$conexion) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }

    $query_alumnos = "SELECT * FROM alumnos";
    $result_alumnos = mysqli_query($conexion, $query_alumnos);
    if (!$result_alumnos) {
        die("Error en la consulta de alumnos: " . mysqli_error($conexion));
    }
    mysqli_free_result($result_alumnos);

    $query_profesores = "SELECT * FROM profesores";
    $result_profesores = mysqli_query($conexion, $query_profesores);
    if (!$result_profesores) {
        die("Error en la consulta de profesores: " . mysqli_error($conexion));
    }
    mysqli_free_result($result_profesores);

?>
