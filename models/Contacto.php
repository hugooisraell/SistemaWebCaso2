<?php
// models/Contacto.php

// Incluye el archivo de configuración para usar la función conectarDB()
require_once __DIR__ . '/../config/conexion.php';

class Contacto
{
    // Propiedad para almacenar la conexión a la base de datos
    private $conexion;

    // Constructor de la clase Contacto, establece la conexión a la base de datos
    public function __construct()
    {
        $this->conexion = conectarDB();
    }

    // Método para obtener todos los contactos de la base de datos
    public function obtenerContactos()
    {
        // Consulta SQL para seleccionar todos los registros de la tabla contactos
        $sql = "SELECT * FROM contactos";
        // Ejecuta la consulta
        $resultado = $this->conexion->query($sql);

        // Retorna todos los registros como un array asociativo
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    // Método para agregar un contacto
    public function agregar($nombre, $apellido, $fecha_nacimeiento, $email, $telefono)
    {
        // Consulta SQL con placeholders para evitar inyección SQL
        $sql = "INSERT INTO contactos (nombre, apellido, fecha_nacimiento, email, telefono) VALUES (?, ?, ?, ?, ?)";
        // Prepara la consulta para su ejecución
        $stmt = $this->conexion->prepare($sql);
        // Vincula los valores a los placeholders
        $stmt->bind_param('sssss', $nombre, $apellido, $fecha_nacimeiento, $email, $telefono);
        // Ejecuta la consulta y retorna el resultado (true o false)
        return $stmt->execute();
    }

    // Método para obtener un contacto por su ID
    public function obtenerPorId($id)
    {
        // Consulta SQL para seleccionar un contacto según su ID
        $sql = "SELECT * FROM contactos WHERE id = ?";
        // Prepara la consulta
        $stmt = $this->conexion->prepare($sql);
        // Vincula el ID al placeholder
        $stmt->bind_param('i', $id);
        // Ejecuta la consulta
        $stmt->execute();
        // Retorna el resultado como un array asociativo
        return $stmt->get_result()->fetch_assoc();
    }

    // Método para actualizar un contacto
    public function actualizarContacto($id, $nombre, $apellido, $fecha_nacimeiento, $email, $telefono)
    {
        // Consulta SQL para actualizar un contacto según su ID
        $sql = "UPDATE contactos SET nombre = ?, apellido = ?, fecha_nacimiento = ?, email = ?, telefono = ? WHERE id = ?";
        // Prepara la consulta
        $stmt = $this->conexion->prepare($sql);
        // Vincula los valores al placeholder
        $stmt->bind_param('sssssi', $nombre, $apellido, $fecha_nacimeiento, $email, $telefono, $id);
        // Ejecuta la consulta y retorna el resultado
        return $stmt->execute();
    }

    // Método para eliminar un contacto
    public function eliminar($id)
    {
        // Consulta SQL para eliminar un contacto según su ID
        $sql = "DELETE FROM contactos WHERE id = ?";
        // Prepara la consulta
        $stmt = $this->conexion->prepare($sql);
        // Vincula el ID al placeholder
        $stmt->bind_param('i', $id);
        // Ejecuta la consulta y retorna el resultado
        return $stmt->execute();
    }
}
