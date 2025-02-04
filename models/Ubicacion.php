<?php

require_once __DIR__ . '/../config/conexion.php';

class Ubicacion {
    private $conexion;

    public function __construct() {
        $this->conexion = conectarDB();
    }

    public function obtenerUbicaciones() {
        $sql = "SELECT * FROM ubicaciones";
        $resultado = $this->conexion->query($sql);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function agregar($nombre, $direccion) {
        $sql = "INSERT INTO ubicaciones (nombre, direccion) VALUES (?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('ss', $nombre, $direccion);
        return $stmt->execute();
    }

    public function obtenerPorId($id) {
        $sql = "SELECT * FROM ubicaciones WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function actualizarUbicacion($id, $nombre, $direccion) {
        $sql = "UPDATE ubicaciones SET nombre = ?, direccion = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('ssi', $nombre, $direccion, $id);
        return $stmt->execute();
    }

    public function eliminar($id) {
        $sql = "DELETE FROM ubicaciones WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
?>
