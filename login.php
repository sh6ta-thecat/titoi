<?php
session_start();

// Cargar los datos de usuarios
$usuarios = include('bd/usuarios.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $password = $_POST['password'];
    $usuarioEncontrado = false;

    // Buscar el usuario en el arreglo
    foreach ($usuarios as $usuario) {
        if ($usuario['id'] === $id && $usuario['contraseña'] === $password) {
            // Usuario encontrado
            $usuarioEncontrado = true;
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['role'] = $usuario['cargo'];
            $_SESSION['user_name'] = $usuario['nombres'];
            // Redirigir al dashboard
            header('Location: dashboard.php');
            exit();
        }
    }

    if (!$usuarioEncontrado) {
        $error = "Credenciales incorrectas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
        <h2>Iniciar sesión</h2>
        <form action="login.php" method="POST">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" required>
            
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Ingresar</button>
        </form>
        <p><?= isset($error) ? $error : ''; ?></p>
    </main>
</body>
</html>
