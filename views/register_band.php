<?php
$error = '';
$succes = ''; 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');

    if($nombre === '') {
        $error = "El nombre de la banda es obligatorio. Si aun no tienes un nombre,
        usa un identificativo, y podras cambiarlo mas adelante.";
    } else {
        $succes = "Banda '$nombre', registrada con éxito.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Banda</title>
</head>
<body>
    <h1>Registrar Nueva Banda</h1>

    <?php if($error): ?>
        <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
    <?php elseif($succes): ?>
        <p style="color:green;"><?php echo htmlspecialchars($succes); ?></p>
    <?php endif; ?>

    <form action="register_band.php" method="POST">
        <label for="nombre">Nombre de la banda:</label><br />
        <input type="text" id="nombre" name="nombre" required value = "<?php echo htmlspecialchars($_POST['nombre'] ?? ''); ?>"><br /><br />

        <button type="submit">Registrar Banda</button>
    </form>
</body>
</html>