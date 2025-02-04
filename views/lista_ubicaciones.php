<?php
// views/lista_ubicaciones.php
?>

<!DOCTYPE html>
<html lang="en">

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

        <h1 class="titulo-principal mt-3 mb-3">Gestión de Eventos</h1>

        <div class="mt-4 mb-4">

            <h3 class="titulo-secundario">Todos las Ubicaciones</h3>

            <div class="d-flex justify-content-end mt-3 mb-3">
                <!-- Botones de acción -->
                <a href="index.php" class="btn btn-custom">Eventos</a>
                <a href="act_contactos.php" class="btn btn-custom">Contactos</a>
                <a href="act_ubicaciones.php" class="btn btn-custom">Ubicaciones</a>
            </div>

            <div class="mt-4 mb-4">
                <?php foreach ($ubicaciones as $ubicacion): ?>
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($ubicacion['nombre']) ?></h5>

                            <p class="card-text">
                                <strong>direccion:</strong> <?= htmlspecialchars($ubicacion['direccion']) ?><br>
                            </p>

                            <div class="d-flex justify-content-end mt-3 mb-3">
                                <!-- Botones de acción -->
                                <a href="act_ubicaciones.php?action=editar&id=<?= htmlspecialchars($ubicacion['id']) ?>" class="btn btn-custom">Editar</a>
                                <a href="act_ubicaciones.php?action=eliminar&id=<?= htmlspecialchars($ubicacion['id']) ?>" class="btn btn-custom">Eliminar</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="d-flex justify-content-end mt-3 mb-3">
                <!-- Botón para agregar un nuevo evento -->
                <a href="act_ubicaciones.php?action=agregar" class="btn btn-custom">Nuevo</a>
            </div>

        </div>

    </div>
</body>

</html>