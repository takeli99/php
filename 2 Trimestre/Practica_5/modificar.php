<?php
include 'conexion_bbdd.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener datos del alumno a partir del ID (ejemplo)
    $query_select_one = "SELECT * FROM alumnos WHERE ID = $id";
    $result_select_one = mysqli_query($conexion, $query_select_one);

    if ($result_select_one && $row = mysqli_fetch_assoc($result_select_one)) {
        echo "<form method='POST' action='actualizar.php'>
                <input type='hidden' name='id' value='" . $row['ID'] . "'>
                <label for='username'>Username:</label>
                <input type='text' name='username' value='" . $row['Username'] . "' required>
                <label for='full_name'>Full Name:</label>
                <input type='text' name='full_name' value='" . $row['Full_Name'] . "' required>
                <label for='email'>E-mail:</label>
                <input type='text' name='email' value='" . $row['E-mail'] . "' required>
                <label for='password'>Password:</label>
                <input type='text' name='password' value='" . $row['Password'] . "' required>
                <input type='submit' value='Actualizar'>
            </form>";
    } else {
        echo "Error al obtener datos del alumno: " . mysqli_error($conexion);
    }
} else {
    echo "ID no proporcionado.";
}

mysqli_close($conexion);
?>
