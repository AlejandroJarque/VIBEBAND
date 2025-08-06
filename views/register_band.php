<?php
$error = '';
$success = '';
 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_banda = trim($_POST['nombre_banda'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $contraseña = trim($_POST['contraseña'] ?? '');
    $estilo_musica = trim($_POST['estilo_musica'] ?? '');
    $formacion = trim($_POST['formacion'] ?? '');
    $objetivos = trim($_POST['objetivos'] ?? '');

    if(
        $nombre_banda === '' ||
        $email === '' ||
        $contraseña === '' ||
        $estilo_musica === '' ||
        $formacion === '' ||
        $objetivos === '') {
        $error = "Todos los campos son obligatorios";
    } else {
        $success = "Banda '$nombre_banda', registrada con éxito.";
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
    <?php elseif($success): ?>
        <p style="color:green;"><?php echo htmlspecialchars($succes); ?></p>
    <?php endif; ?>

    <form action="register_band.php" method="POST">
        <label for="nombre_banda">Nombre de la banda:</label><br />
        <input type="text" id="nombre_banda" name="nombre_banda" required value = "<?php echo htmlspecialchars($_POST['nombre_banda'] ?? ''); ?>"><br /><br />

        <label for="email">Email:</label><br />
        <input type="text" id="email" name="email" required value = "<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"><br /><br />

        <label for="contraseña">Contraseña:</label><br />
        <input type="password" id="contraseña" name="contraseña" required><br /><br />

        <label for="estilo_musica">Estilo de musica:</label><br />
        <input type="text" id="estilo_musica" name="estilo_musica" required value = "<?php echo htmlspecialchars($_POST['estilo_musica'] ?? ''); ?>"><br /><br />

        <label for="formacion">Formacion de la banda:</label><br />
        <input type="text" id="formacion" name="formacion" required value = "<?php echo htmlspecialchars($_POST['formacion'] ?? ''); ?>"><br /><br />

        <label for="objetivos">Objetivos de la banda:</label><br />
        <textarea id="objetivos" name="objetivos" required><?php echo htmlspecialchars($_POST['objetivos'] ?? ''); ?></textarea><br /><br />

        <button type="submit">Registrar Banda</button>
    </form>
</body>
</html>