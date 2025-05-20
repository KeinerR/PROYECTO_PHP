<?php
class Database {
    private static $host = 'localhost';
    private static $dbName = 'dbAurora';
    private static $username = 'root';
    private static $password = '';
    private static $conn;

    public static function connect() {
        if (self::$conn === null) {
            try {
                self::$conn = new PDO(
                    "mysql:host=" . self::$host . ";dbname=" . self::$dbName . ";charset=utf8mb4",
                    self::$username,
                    self::$password
                );
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Conexión fallida: " . $e->getMessage());
            }
        }
        return self::$conn;
    }

    public static function disconnect() {
        self::$conn = null;
    }
}
?>
