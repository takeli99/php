<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Actualizar Alumno</title>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap'>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>
    <?php
    include 'conexion_bbdd.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query_select_one = "SELECT * FROM alumnos WHERE ID = $id";
        $result_select_one = mysqli_query($conexion, $query_select_one);

        if ($result_select_one && $row = mysqli_fetch_assoc($result_select_one)) {
            echo "<form method='POST' action='modificar.php'>
                <div class='wrapper'>
                    <div class='login_box'>
                        <div class='login-header'>
                            <span>Update</span>
                        </div>

                        <input type='hidden' name='id' value='" . $row['ID'] . "'>

                        <div class='input_box'>
                            <input class='input-field' type='text' name='username' value='" . $row['Username'] . "' required>
                            <label for='username' class='label'>Username:</label>
                            <i class='bx bx-user icon'></i>
                        </div>

                        <div class='input_box'>
                            <input class='input-field' type='text' name='full_name' value='" . $row['Full_Name'] . "' required>
                            <label for='full_name' class='label'>Full Name:</label>
                            <i class='bx bx-user icon'></i>
                        </div>

                        <div class='input_box'>
                            <input class='input-field' type='text' name='email' value='" . $row['E-mail'] . "' required>
                            <label for='email' class='label'>E-mail:</label>
                            <i class='bx bx-user icon'></i>
                        </div>

                        <div class='input_box'>
                            <input class='input-field' type='text' name='password' value='" . $row['Password'] . "' required>
                            <label for='password' class='label'>Password:</label>
                            <i class='bx bx-lock-alt icon'></i>
                        </div>

                        <div class='input_box'>
                            <input type='submit' class='input-submit' value='Actualizar'>
                        </div>
                    </div>
                </div>
                    </form>";
        } else {
            echo "Error al obtener datos del alumno: " . mysqli_error($conexion);
        }
    } else {
        echo "ID no proporcionado.";
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query_update = "UPDATE alumnos SET 
                            Username = '$username', 
                            Full_Name = '$full_name', 
                            `E-mail` = '$email', 
                            Password = '$password' 
                            WHERE ID = $id";
        
        $result_update = mysqli_query($conexion, $query_update);

        if ($result_update) {
            // Redirigir a la página con la tabla actualizada
            header("Location: meterAlumno.php");
            exit();
        } else {
            echo "Error al actualizar datos: " . mysqli_error($conexion);
        }
    }

    mysqli_close($conexion);
    ?>
</body>

</html>
