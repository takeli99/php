<?php
include 'conexion_bbdd.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query_delete = "DELETE FROM alumnos WHERE ID = $id";
    $result_delete = mysqli_query($conexion, $query_delete);

    header("Location:meterAlumno.php");

mysqli_close($conexion);

}
?>
