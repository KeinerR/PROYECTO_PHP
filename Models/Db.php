<?php
class Db {
    private static $host = 'localhost';
    private static $dbName = 'aurora';
    private static $username = 'root';
    private static $password = '';
    private static $conn = null;

    // Evitar instancias externas
    private function __construct() {}
    private function __clone() {}

    public static function getConnection() {
        if (self::$conn === null) {
            try {
                $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbName . ";charset=utf8mb4";
                self::$conn = new PDO($dsn, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión a la base de datos: " . $e->getMessage());
            }
        }

        return self::$conn;
    }
}
?>
