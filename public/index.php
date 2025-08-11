<?php
require_once __DIR__.'/../config/db.php';

$db = new Database();
$conn = $db -> getConnection();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?> - Inicio</title>
    <link rel="stylesheet" href="css/styles.cc">
</head>
<body>
    <header>
        <h1>Bienvenido a <?= APP_NAME ?></h1>
    </header>
    <main>
        <?php if ($conn): ?>
            <p>Conexion a bse de datos exitosa.</p>
        <?php else: ?>
            <p>Error al conectar con la base de datos.</p>
        <?php endif; ?>
        <p>¡Tu proyecto VIBEBAND esta en marcha¡</p>
    </main>
    <footer>
        <p>$copy; <?= date('Y') ?> <?= APP_NAME ?>.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>