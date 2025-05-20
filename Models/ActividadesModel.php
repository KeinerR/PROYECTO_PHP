<?php
require_once 'db.php';

class ActividadesModel {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("
            SELECT A.*, N.nombre AS nivel_nombre 
            FROM Actividades A 
            LEFT JOIN Nivel_Actividades N ON A.nivel_id = N.id
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM Actividades WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nombre, $nivel_id, $descripcion, $tiempo_estimado) {
        $stmt = $this->conn->prepare("
            INSERT INTO Actividades (nombre, nivel_id, descripcion, tiempo_estimado)
            VALUES (?, ?, ?, ?)
        ");
        return $stmt->execute([$nombre, $nivel_id, $descripcion, $tiempo_estimado]);
    }

    public function update($id, $nombre, $nivel_id, $descripcion, $tiempo_estimado) {
        $stmt = $this->conn->prepare("
            UPDATE Actividades 
            SET nombre = ?, nivel_id = ?, descripcion = ?, tiempo_estimado = ?
            WHERE id = ?
        ");
        return $stmt->execute([$nombre, $nivel_id, $descripcion, $tiempo_estimado, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM Actividades WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
