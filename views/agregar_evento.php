<?php
include './config/conflang.php';
?>

<!-- views/agregar_evento.php -->
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Evento</title>
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
                </select>
            </form>

            <a href="" class="btn btn-custom"><?php echo $lang["tutorial"]; ?></a>
        </div>
        
        <h1 class="titulo-principal mt-3 mb-3"><?php echo $lang["gestion-eventos"]; ?></h1>

        <div class="mt-4 mb-4">

            <h3 class="titulo-secundario"><?php echo $lang["nuevo-evento"]; ?></h3>

            <!-- Formulario para agregar un nuevo evento -->
            <form action="index.php?action=guardar" method="POST">

                <!-- Campos para ingresar los datos de nuevo evento -->
                <div class="form-group">
                    <label for="titulo"><?php echo $lang["titulo"]; ?></label>
                    <input type="text" name="titulo" id="titulo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="fecha"><?php echo $lang["fecha"]; ?></label>
                    <input type="date" name="fecha" id="fecha" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="hora"><?php echo $lang["hora"]; ?></label>
                    <input type="time" name="hora" id="hora" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="categoria"><?php echo $lang["categoria"]; ?></label>
                    <input type="text" name="categoria" id="categoria" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="descripcion"><?php echo $lang["descripcion"]; ?></label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lugar"><?php echo $lang["lugar"]; ?></label>
                    <input type="text" name="lugar" id="lugar" class="form-control" required>
                </div>

                <div class="d-flex justify-content-end mt-3 mb-3">
                    <!-- Botón para enviar el formulario y guardar el evento -->
                    <button type="submit" class="btn btn-custom"><?php echo $lang["guardar"]; ?></button>
                    <!-- Botón para cancelar y regresar a la lista de eventos -->
                    <a href="index.php" class="btn btn-custom"><?php echo $lang["cancelar"]; ?></a>
                </div>

            </form>

        </div>

    </div>
</body>

<script src="./js/script.js"></script>

</html>