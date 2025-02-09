<?php

require_once __DIR__ . '/../models/Ubicacion.php';

class UbicacionesController {
    private $ubicacion;

    public function __construct() {
        $this->ubicacion = new Ubicacion();
    }

    public function index() {
        $ubicaciones = $this->ubicacion->obtenerUbicaciones();
        require_once __DIR__ . '/../views/lista_ubicaciones.php';
    }

    public function mostrarFormularioAgregar() {
        require_once __DIR__ . '/../views/agregar_ubicacion.php';
    }

    public function agregar() {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $detalle = $_POST['detalle'];

        $this->ubicacion->agregar($nombre, $direccion, $detalle);
        
        header('Location: ./act_ubicaciones.php');
    }

    public function mostrarFormularioEditar($id) {
        $ubicacion = $this->ubicacion->obtenerPorId($id);
        require_once __DIR__ . '/../views/editar_ubicacion.php';
    }

    public function editar($id) {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $detalle = $_POST['detalle'];

        $this->ubicacion->actualizarUbicacion($id, $nombre, $direccion, $detalle);
        
        header('Location: ./act_ubicaciones.php');
    }

    public function eliminar($id) {
        $this->ubicacion->eliminar($id);
        
        header('Location: ./act_ubicaciones.php');
    }
}
