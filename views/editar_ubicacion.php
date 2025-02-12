<?php
include './config/conflang.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ubicacion</title>
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

            <h3 class="titulo-secundario"><?php echo $lang["editar-ubicacion"]; ?></h3>

            <form action="act_ubicaciones.php?action=actualizar&id=<?= $ubicacion['id'] ?>" method="POST">

                <div class="form-group">
                    <label for="nombre"><?php echo $lang["nombre"]; ?></label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $ubicacion['nombre'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="detalle"><?php echo $lang["detalle"]; ?></label>
                    <input type="text" name="detalle" id="detalle" class="form-control" value="<?= $ubicacion['detalle'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="direccion"><?php echo $lang["direccion"]; ?></label>
                    <input type="text" name="direccion" id="direccion" class="form-control" value="<?= $ubicacion['direccion'] ?>" required>
                </div>
                
                <div class="d-flex justify-content-end mt-3 mb-3">
                    <!-- Botón para actualizar la ubicacion -->
                    <button type="submit" class="btn btn-custom"><?php echo $lang["actualizar"]; ?></button>
                    <!-- Botón para cancelar y regresar a la lista de ubicaciones -->
                    <a href="act_ubicaciones.php" class="btn btn-custom"><?php echo $lang["cancelar"]; ?></a>
                </div>

            </form>

        </div>

    </div>
</body>

<script src="./js/script.js"></script>

</html>