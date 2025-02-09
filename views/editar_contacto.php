<?php
include './config/conflang.php';
?>

<!-- views/editar_contacto.php -->
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contacto</title>
    <!-- Incluye Bootstrap para los estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/styles_form.css">
</head>

<body>
    <div class="container mt-4 mb-4">

        <!-- Selector de idioma -->
        <div class="d-flex justify-content-end mt-3 mb-3">
            <form method="POST" id="lang-form">
                <select name="lang" id="lang-selector" class="form-select btn btn-custom">
                    <option value="es" <?php if ($_SESSION['lang'] == 'es') echo 'selected'; ?>>Español</option>
                    <option value="en" <?php if ($_SESSION['lang'] == 'en') echo 'selected'; ?>>English</option>
                    <option value="pt" <?php if ($_SESSION['lang'] == 'pt') echo 'selected'; ?>>Português</option>
                    <option value="fr" <?php if ($_SESSION['lang'] == 'fr') echo 'selected'; ?>>Français</option>
                    <option value="ru" <?php if ($_SESSION['lang'] == 'ru') echo 'selected'; ?>>русский</option>
                    <option value="de" <?php if ($_SESSION['lang'] == 'de') echo 'selected'; ?>>Deutsch</option>
                </select>
            </form>

            <a href="" class="btn btn-custom"><?php echo $lang["tutorial"]; ?></a>
        </div>

        <h1 class="titulo-principal mt-3 mb-3"><?php echo $lang["gestion-eventos"]; ?></h1>

        <div class="mt-4 mb-4">

            <h3 class="titulo-secundario"><?php echo $lang["editar-contacto"]; ?></h3>

            <!-- Formulario para editar un contacto -->
            <form action="act_contactos.php?action=actualizar&id=<?= $contacto['id'] ?>" method="POST">

                <!-- Campos para editar los datos de un contacto -->
                <div class="form-group">
                    <label for="nombre"><?php echo $lang["nombres"]; ?></label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $contacto['nombre'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="apellido"><?php echo $lang["apellidos"]; ?></label>
                    <input type="text" name="apellido" id="apellido" class="form-control" value="<?= $contacto['apellido'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento"><?php echo $lang["fecha_nacimiento"]; ?></label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="<?= $contacto['fecha_nacimiento'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email"><?php echo $lang["correo"]; ?></label>
                    <input type="text" name="email" id="email" class="form-control" value="<?= $contacto['email'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="telefono"><?php echo $lang["telefono"]; ?></label>
                    <input type="text" name="telefono" id="telefono" class="form-control" value="<?= $contacto['telefono'] ?>" required>
                </div>

                <div class="d-flex justify-content-end mt-3 mb-3">
                    <!-- Botón para actualizar el contacto -->
                    <button type="submit" class="btn btn-custom"><?php echo $lang["actualizar"]; ?></button>
                    <!-- Botón para cancelar y regresar a la lista de contactos -->
                    <a href="act_contactos.php" class="btn btn-custom"><?php echo $lang["cancelar"]; ?></a>
                </div>

            </form>

        </div>

    </div>
</body>

<script src="./js/script.js"></script>

</html>