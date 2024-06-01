<!DOCTYPE html>
<html>

<head>
    <title>Actualizar Tarea</title>
</head>

<body>
    <h1>Actualizar Tarea</h1>

    <form method="post" action="actualizar">
        <!-- Se utiliza un campo oculto para enviar el ID de la tarea -->
        <input type="hidden" name="id" value="<?= $tarea['id'] ?>">
        <label for="titulo">Título:</label>
        <!-- Se muestra el título de la tarea en un campo de texto -->
        <input type="text" id="titulo" name="titulo" value="<?= $tarea['titulo'] ?>">
        <label for="descripcion">Descripción:</label>
        <!-- Se muestra la descripción de la tarea en un campo de texto multilinea -->
        <textarea id="descripcion" name="descripcion"><?= $tarea['descripcion'] ?></textarea>
        <!-- Botón para enviar el formulario y actualizar la tarea -->
        <button type="submit">Actualizar</button>
    </form>
</body>

</html>