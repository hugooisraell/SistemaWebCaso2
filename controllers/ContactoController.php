<?php
// controllers/ContactoController.php

// Incluye el modelo Contacto para acceder a sus métodos
require_once __DIR__ . '/../models/Contacto.php';

class ContactosController
{
    // Propiedad para almacenar la instancia del modelo Contacto
    private $contacto;

    // Constructor que crea una instancia del modelo Contacto
    public function __construct()
    {
        $this->contacto = new Contacto();
    }

    // Método para mostrar la lista de contactos
    public function index()
    {
        // Llama al método obtenerContactos() para obtener todos los contactos
        $contactos = $this->contacto->obtenerContactos();
        // Incluye la vista para listar los contactos
        require_once __DIR__ . '/../views/lista_contactos.php';
    }

    // Método para mostrar el formulario de agregar contacto
    public function mostrarFormularioAgregar()
    {
        // Incluye la vista para agregar un contacto
        require_once __DIR__ . '/../views/agregar_contacto.php';
    }

    // Método para manejar la creación de un nuevo contacto
    public function agregar()
    {
        // Obtiene los datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];


        // Llama al método agregar() para agregar el contacto
        $this->contacto->agregar($nombre, $apellido, $fecha_nacimiento, $email, $telefono);

        // Redirige a la lista de contactos
        header('Location: ./act_contactos.php');
    }

    // Método para mostrar el formulario de edición
    public function mostrarFormularioEditar($id)
    {
        // Llama al método obtenerPorId() para obtener los datos del contacto
        $contacto = $this->contacto->obtenerPorId($id);
        // Incluye la vista para editar el contacto
        require_once __DIR__ . '/../views/editar_contacto.php';
    }

    // Método para actualizar un contacto
    public function editar($id)
    {
        // Obtiene los datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        // Llama al método actualizarContacto() para guardar los cambios
        $this->contacto->actualizarContacto($id, $nombre, $apellido, $fecha_nacimiento, $email, $telefono);

        // Redirige a la lista de contactos
        header('Location: ./act_contactos.php');
    }

    // Método para eliminar un contacto
    public function eliminar($id)
    {
        // Llama al método eliminar() para borrar el contacto
        $this->contacto->eliminar($id);

        // Redirige a la lista de contactos
        header('Location: ./act_contactos.php');
    }
}
