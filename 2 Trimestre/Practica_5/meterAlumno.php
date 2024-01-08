<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap'>
  <link rel="stylesheet" href="estilos/estilos.css">
  <style>
    #datos-container {
      display: none;
    }
  </style>
</head>

<body>
  <!-- partial:index.partial.html -->
  <form method="POST" action="registro_alu.php">
    <div class="wrapper">
      <div class="contenedor">
        <div class="login-header">
          <span>Alumno</span>
        </div>
        
        <div class="input_box">
          <input type="text" id="user" class="input-field" name="username" required>
          <label for="user" class="label">Username</label>
          <i class="bx bx-user icon"></i>
        </div>

        <div class="input_box">
          <input type="text" id="user" class="input-field" name="full_name" required>
          <label for="user" class="label">Full Name</label>
          <i class="bx bx-user icon"></i>
        </div>

        <div class="input_box">
          <input type="text" id="user" class="input-field" name="email" required>
          <label for="user" class="label">E-mail</label>
          <i class="bx bx-user icon"></i>
        </div>

        <div class="input_box">
          <input type="password" id="pass" class="input-field" name="password" required>
          <label for="pass" class="label">Password</label>
          <i class="bx bx-lock-alt icon"></i>
        </div>

        <div class="input_box">
          <input type="submit" class="input-submit" value="Nuevo Alumno">
        </div>

        <div class="input_box">
          <button class="input-submit" onclick="mostrarDatos()">Mostrar Datos</button>
        </div>

        <div class="input_box">
          <a href="logout.php" class="input-submit"style="color: var(--black-color); text-decoration: none; display: flex; align-items: center; justify-content: center;">
          Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </form>
  
  <div id="datos-container">
    <?php
    include 'conexion_bbdd.php';
    $query_select = "SELECT * FROM alumnos";
    $result_select = mysqli_query($conexion, $query_select);
    if ($result_select) {
      echo "<div class='wrapper'>
              <div class='contenedor1'>
                <div class='login-header'>
                  <span>Tabla</span>
                </div>
                <table>
                  <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>E-mail</th>
                    <th>Password</th>
                  </tr>";
      while ($row = mysqli_fetch_assoc($result_select)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Username'] . "</td>";
        echo "<td>" . $row['Full_Name'] . "</td>";
        echo "<td>" . $row['E-mail'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td class='acciones'><a href='modificar.php?id=" . $row['ID'] . "'>Modificar</a></td>";
        echo "<td class='acciones'><a href='eliminar.php?id=" . $row['ID'] . "'>Eliminar</a></td>";
        echo "</tr>";
      }
      echo "</table>
              </div>
            </div>";
    } else {
      echo "Error en la consulta SELECT: " . mysqli_error($conexion);
    }
    mysqli_close($conexion);
    ?>
  </div>

  <script>
    function mostrarDatos() {
      document.getElementById("datos-container").style.display = "block";
    }
  </script>
  <!-- partial -->
</body>

</html>
