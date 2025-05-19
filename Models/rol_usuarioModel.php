<?php
require_once 'Db.php';

class RolUsuarioModel {
    private $id;
    private $nombre;
    private $db;

    public function __construct() {
        $this->db = Db::getConnection();
    }

    // Getter y Setter para ID
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = htmlspecialchars(strip_tags($id));
    }

    // Getter y Setter para Nombre
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = htmlspecialchars(strip_tags($nombre));
    }

    // Insertar nuevo rol
    public function guardar() {
        try {
            $sql = "INSERT INTO Rol_Usuario (nombre) VALUES (:nombre)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nombre', $this->nombre);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al guardar rol: " . $e->getMessage();
            return false;
        }
    }

    // Obtener todos los roles
    public function obtenerTodos() {
        try {
            $sql = "SELECT * FROM Rol_Usuario";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener roles: " . $e->getMessage();
            return [];
        }
    }

    // Buscar un rol por ID
    public function obtenerPorId($id) {
        try {
            $sql = "SELECT * FROM Rol_Usuario WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al buscar rol: " . $e->getMessage();
            return null;
        }
    }
}
?>
