<?php
require_once __DIR__. '/../controllers/BandController.php';

$action = $_GET['action'] ?? 'form';

$controller = new BandController();

switch($action) {
    case 'register':
        $controller->register();
        break;
    case 'form':
        default:
        $controller->showForm();
        break;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIBEBAND</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <h1>Bienvenido a VIBEBAND, te esperabamos...</h1>
    <nav>
        <ul>
            <li><a href="../views/register_band.php">Registrar banda</a></li>
        </ul>
    </nav>
</body>
</html>