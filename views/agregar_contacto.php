<!-- views/agregar_contacto.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Contacto</title>
    <!-- Incluye Bootstrap para los estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/styles_form.css">
</head>

<body>
    <div class="container mt-4 mb-4">

        <h1 class="titulo-principal mt-3 mb-3">Gestión de Eventos</h1>

        <div class="mt-4 mb-4">

            <h3 class="titulo-secundario">Nuevo Contacto</h3>

            <!-- Formulario para agregar un nuevo contacto -->
            <form action="act_contactos.php?action=guardar" method="POST">

                <!-- Campos para ingresar los datos de nuevo contacto -->
                <div class="form-group">
                    <label for="nombre">Nombres</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellidos</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" required>
                </div>
               <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" required>
                </div>
                
                <div class="d-flex justify-content-end mt-3 mb-3">
                    <!-- Botón para enviar el formulario y guardar el contacto -->
                    <button type="submit" class="btn btn-custom">Guardar</button>
                    <!-- Botón para cancelar y regresar a la lista de contactos -->
                    <a href="act_contactos.php" class="btn btn-custom">Cancelar</a>
                </div>

            </form>

        </div>

    </div>
</body>

</html>