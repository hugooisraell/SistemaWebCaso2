<?php

require_once __DIR__ . '/controllers/UbicacionController.php';

$controller = new UbicacionesController();

if (isset($_GET['action'])) {
    // almacena el valor de la accion
    $action = $_GET['action'];

    if ($action == 'agregar') {
        $controller->mostrarFormularioAgregar();
    } elseif ($action == 'guardar') {
        $controller->agregar();
    } elseif ($action == 'editar') {
        $id = $_GET['id'];
        $controller->mostrarFormularioEditar($id);
    } elseif ($action == 'actualizar') {
        $id = $_GET['id'];
        $controller->editar($id);
    } elseif ($action == 'eliminar') {
        $id = $_GET['id'];
        $controller->eliminar($id);
    } else {
        $controller->index();
    }
} else {
    $controller->index();
}
