<?php
require_once 'db.php';

class NivelActividades {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM Nivel_Actividades");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM Nivel_Actividades WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nombre) {
        $stmt = $this->conn->prepare("INSERT INTO Nivel_Actividades (nombre) VALUES (?)");
        return $stmt->execute([$nombre]);
    }

    public function update($id, $nombre) {
        $stmt = $this->conn->prepare("UPDATE Nivel_Actividades SET nombre = ? WHERE id = ?");
        return $stmt->execute([$nombre, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM Nivel_Actividades WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
