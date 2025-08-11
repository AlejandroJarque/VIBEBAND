<?php
// http://proyectos.local:8080/VIBEBAND/config/test_db.php

require_once 'db.php';

echo "App: ". APP_NAME."<br>";
echo "Base URL: ". BASE_URL."<br>";

$db = new Database();
$conn = $db -> getConnection();

if($conn) {
    echo "Conexion a la base de datos exitosa.";
} else {
    echo "Error en la conexion a la base de datos.";
}
?>