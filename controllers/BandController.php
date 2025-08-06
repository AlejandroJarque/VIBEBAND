<?php
require_once __DIR__.'/../models/Band.php';

class BandController { 
    public function showForm() {
        include __DIR__. '/../views/register_band.php';
    }
    public function register() {
         if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre_banda = trim($_POST['nombre_banda']?? '');
        $email = trim($_POST['email'] ?? '');
        $contraseña = trim($_POST['contraseña'] ?? '');
        $estilo_musica = trim($_POST['estilo_musica'] ?? '');
        $formacion = trim($_POST['formacion'] ?? '');
        $objetivos = trim($_POST['objetivos'] ?? '');

        if (
            empty($nombre_banda) || empty($email) || empty($contraseña) ||
            empty($estilo_musica) || empty($formacion) || empty($objetivos)
        ) {
            echo "<p>Todos los campos son obligatorios.</p>";
            echo "<a href='/?action=form'>Volver al formulario</a>";
            return;
        }

        $hashedPassword = password_hash($contraseña, PASSWORD_DEFAULT);

        $band = new Band();
        $success = $band->insertBand(
                $nombre_banda,
                $email,
                $hashedPassword,
                $estilo_musica,
                $formacion,
                $objetivos
        );

        if($success) {
            echo "<p>Banda registrada exitosamente.</p>";
            echo "<a href='/?action=form'>Registrar otra banda</a>";
        } else {
            echo "<p>Error al registrar la banda.</p>";
            echo  "<a href='/?action=form'>Intentar de nuevo</a>";
        }
    } else {
        include __DIR__. '/../views/register_band.php';
    }
}
}
?>