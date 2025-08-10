<?php
// Configuracion general del proyecto

// Variables globales
define('BASE_URL', 'http://proyectos.local/vibeband/public/');
define('APP_NAME', 'VIBEBAND');

// Configuracion de la base de datos
define('DB_HOST', 'localhost');
define('DB_NAME', 'vibeband');
define('DB_USER', 'root');
define('DB_PASS', '');

class Database {
    private $conn;

    public function getConnection() {
        $this -> conn = null;
        try{
            $this -> conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,
            DB_USER, DB_PASS);

            $this -> conn -> exec("set names utf8mb4");
        } catch(PDOException $exception) {
            echo "Error de conexion: ". $exception -> getMessage();
        }
        return $this -> conn;
    }
}
?>