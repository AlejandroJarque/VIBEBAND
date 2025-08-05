<?php
$host = 'localhost';
$db = 'bandas';
$user = 'root';       // ajusta según tu configuración
$pass = '';           // ajusta si tienes contraseña

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>