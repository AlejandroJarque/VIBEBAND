<?php

class Band {
    private $pdo;

    public function __construct() {
        $host = 'localhost';
        $db = 'bandas';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        try {
            $this->pdo = new PDO($dsn, $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexion a la base de datos: ". $e->getMessage());
        }
    }

    public function insertBand($data) {
        $sql = "INSERT INTO bandas (nombre_banda, email, contraseña, estilo_musica, formacion, objetivos)
                VALUES (:nombre_banda, :email, :contraseña, :estilo_musica, :formacion, :objetivos)";

        $stmt = $this ->pdo->prepare($sql);

        return $stmt ->execute([
              ':nombre_banda'   => $data['nombre_banda'],
        ':email'          => $data['email'],
        ':contraseña'     => $data['contraseña'],
        ':estilo_musica'  => $data['estilo_musica'],
        ':formacion'      => $data['formacion'],
        ':objetivos'      => $data['objetivos'],
        ]);
    }
}
?>