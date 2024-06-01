<!DOCTYPE html>
<html>

<head>
    <title>Eliminar Tarea</title>
</head>

<body>
    <h1>Eliminar Tarea</h1>
    <form method="post" action="eliminar">
        <input type="hidden" name="id" value="<?= $tarea['id'] ?>">
        <p>¿Estás seguro de que quieres eliminar la tarea "<?= $tarea['titulo'] ?>"?</p>
        <button type="submit">Eliminar</button>
    </form>
</body>

</html>