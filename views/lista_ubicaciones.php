<?php
// views/lista_ubicaciones.php
include './config/conflang.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ubicaciones</title>
    <!-- Importa el archivo CSS de Bootstrap desde CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Importa los estilos -->
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <div class="container mt-4 mb-3">

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

            <h3 class="titulo-secundario"><?php echo $lang["todas-ubicaciones"]; ?></h3>

            <div class="d-flex justify-content-end mt-3 mb-3">
                <!-- Botones de acción -->
                <a href="index.php" class="btn btn-custom"><?php echo $lang["eventos"]; ?></a>
                <a href="act_contactos.php" class="btn btn-custom"><?php echo $lang["contactos"]; ?></a>
                <a href="act_ubicaciones.php" class="btn btn-custom"><?php echo $lang["ubicaciones"]; ?></a>
            </div>

            <div class="mt-4 mb-4">
                <?php foreach ($ubicaciones as $ubicacion): ?>
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($ubicacion['nombre']) ?></h5>

                            <p class="card-text">
                                <strong><?php echo $lang["direccion"]; ?>:</strong> <?= htmlspecialchars($ubicacion['direccion']) ?><br>
                                <strong><?php echo $lang["detalle"]; ?>:</strong> <?= htmlspecialchars($ubicacion['detalle']) ?><br>
                            </p>

                            <div class="d-flex justify-content-end mt-3 mb-3">
                                <!-- Botones de acción -->
                                <a href="act_ubicaciones.php?action=editar&id=<?= htmlspecialchars($ubicacion['id']) ?>" class="btn btn-custom"><?php echo $lang["editar"]; ?></a>
                                <a href="act_ubicaciones.php?action=eliminar&id=<?= htmlspecialchars($ubicacion['id']) ?>" class="btn btn-custom"><?php echo $lang["eliminar"]; ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="d-flex justify-content-end mt-3 mb-3">
                <!-- Botón para agregar un nuevo evento -->
                <a href="act_ubicaciones.php?action=agregar" class="btn btn-custom"><?php echo $lang["nuevo"]; ?></a>
            </div>

        </div>

    </div>
</body>

<script src="./js/script.js"></script>

</html>