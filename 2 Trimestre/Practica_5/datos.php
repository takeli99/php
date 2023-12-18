<?php
session_start();
include 'includes/db.php';

// Procesar el formulario para insertar nuevos datos
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash de la contraseña
    $email = $_POST['email'];

    // Insertar datos en la base de datos
    $insertQuery = $pdo->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
    $insertQuery->execute([$username, $password, $email]);
}

// Consultar datos existentes en la base de datos
$query = $pdo->query("SELECT * FROM users");
$users = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/style.css">
    <title>CRUD App</title>
</head>
<body>
    <h1>CRUD App</h1>

    <!-- Formulario para agregar nuevos datos -->
    <form action="" method="post">
        <label for="username">Usuario:</label>
        <input type="text" name="username" required>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <button type="submit" name="submit">Agregar Usuario</button>
    </form>

    <!-- Mostrar la tabla con los datos existentes -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
