<?php

session_start(); // Iniciar sesión

// Si el usuario selecciona un idioma, actualizar la sesión
if (isset($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
}

// Definir idioma por defecto si no está en sesión
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es'; // Español por defecto
}

// Cargar el archivo de idioma correspondiente
$language = $_SESSION['lang'];
include "lang/$language.php"; // Incluir traducciones
