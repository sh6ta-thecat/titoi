<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['user_id'])) {
    // Si no está logueado, redirigir al login
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>
    <main>
        <h2>Bienvenido, <?= htmlspecialchars($_SESSION['user_name']); ?>!</h2>
        <p>Tu nivel de usuario es: <strong><?= htmlspecialchars($_SESSION['role']); ?></strong></p>

        <form method="post" action="logout.php">
            <button type="submit">Cerrar Sesión</button>
        </form>
    </main>
</body>
</html>
