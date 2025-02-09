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

    public function agregar($nombre, $direccion, $detalle) {
        $sql = "INSERT INTO ubicaciones (nombre, direccion, detalle) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('sss', $nombre, $direccion, $detalle);
        return $stmt->execute();
    }

    public function obtenerPorId($id) {
        $sql = "SELECT * FROM ubicaciones WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function actualizarUbicacion($id, $nombre, $direccion, $detalle) {
        $sql = "UPDATE ubicaciones SET nombre = ?, direccion = ?, detalle = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('sssi', $nombre, $direccion, $detalle, $id);
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
