<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Ubicacion</title>
    <!-- Incluye Bootstrap para los estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/styles_form.css">
</head>

<body>
    <div class="container mt-4 mb-4">

        <h1 class="titulo-principal mt-3 mb-3">Gestión de Eventos</h1>

        <div class="mt-4 mb-4">

            <h3 class="titulo-secundario">Nuevo Ubicacion</h3>

            <form action="act_ubicaciones.php?action=guardar" method="POST">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
               <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" required>
                </div>
                
                <div class="d-flex justify-content-end mt-3 mb-3">
                    <!-- Botón para enviar el formulario y guardar la ubicacion -->
                    <button type="submit" class="btn btn-custom">Guardar</button>
                    <!-- Botón para cancelar y regresar a la lista de ubicaciones -->
                    <a href="act_ubicaciones.php" class="btn btn-custom">Cancelar</a>
                </div>

            </form>

        </div>

    </div>
</body>

</html>