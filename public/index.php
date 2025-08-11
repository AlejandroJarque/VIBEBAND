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
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="container flex flex-center" style="height: 60px; background-color: var(--color-primary); color: white">
        <h1>VIBEBAND</h1>
    </header>

    <nav class="container flex mt-md" style="gap: 1rem;">
        <a href="#" class="nav-link">Inicio</a>
        <a href="#" class="nav-link">Bandas</a>
        <a href="#" class="nav-link">Contacto</a>
    </nav>

    <main class="container mt-md">
        <section class="intro">
            <h2>Bienvenido a VIBEBAND</h2>
            <P>Tu plataforma para descubrir y gestionar bandas musicales, y darte a conocer como artista</P>
        </section>

        <section class="register-form mt-md">
            <h3>Registro de Banda</h3>

            <?php if ($conn): ?>
                <p>Conexion a base de datos exitosa.</p>
            <?php else: ?>
                <p>Error al conectar con la base de datos.</p>
            <?php endif; ?>

            <form action="#" method="POST" class="flex flex-column" style="max-width: 400px; gap: var(--space-sm);">
                <label for="bandName">Nombre de la banda</label>
                <input type="text" id="bandName" name="bandName" required />

                <label for="genre">Género musical</label>
                <select id="genre" name="genre" required>
                    <option value="">Selecciona un genero</option>
                    <option value="rock">Rock</option>
                    <option value="pop">Pop</option>
                    <option value="jazz">Jazz</option>
                    <option value="metal">Metal</option>
                    <option value="blues">Blues</option>
                    <option value="reggae">Reggae</option>
                    <option value="electronica">Electronica</option>
                    <option value="rap">Rap</option>
                    <option value="funky">Funky</option>
                    <option value="disco">Disco</option>
                    <option value="trap">Trap</option>
                    <option value="otros">Otros estilos</option>
                </select>

                <label for="description">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="5"></textarea>

                <button type="submit">Registrar</button>
            </form> 
        </section>
    </main>
   
    <footer class="container flex flex-center mt-md" style="height: 50px; background-color: var(--color-secondary); color :white;">
        <p>&copy; <?= date('Y') ?> <?= APP_NAME ?>Todos los derechos reservados.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>