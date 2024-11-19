<?php
session_start();

// Verificar si el usuario está logueado
if (isset($_SESSION['user_id'])) {
    // Si está logueado, redirigir al dashboard
    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
        <h2>Bienvenido al Sistema de Gestión de Inventarios</h2>
        <p>Por favor, <a href="login.php">inicia sesión</a> para continuar.</p>
        <p>Si aún no tienes cuenta, regístrate desde el sistema (por ahora manualmente en `usuarios.php`).</p>
    </main>
</body>
</html>
