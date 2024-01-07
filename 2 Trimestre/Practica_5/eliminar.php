<?php
include 'conexion_bbdd.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query_delete = "DELETE FROM alumnos WHERE ID = $id";
    $result_delete = mysqli_query($conexion, $query_delete);

    if ($result_delete) {
        echo "Registro eliminado correctamente.";
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
} else {
    echo "ID no proporcionado.";
}

mysqli_close($conexion);
?>
