<!DOCTYPE html>
<html>

<head>
    <title>Lista de Tareas</title>
</head>

<body>
    <h1>Lista de Tareas</h1>
    <?php if (empty($tareas)): ?>
        <p>No hay tareas disponibles.</p> <a href="crear">Crear Tarea</a>
    <?php else: ?>
        <table>
            <!-- <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                </tr>
            </thead> -->
            <tbody>
                <?php foreach ($tareas as $tarea): ?>
                    <h2><?= $tarea['titulo'] ?></h2>
                    <p><?= $tarea['descripcion'] ?></p>
                    <!-- <a href="actualizar?id=<?= $tarea['id'] ?>">Actualizar</a>
                    <a href="eliminar?id=<?= $tarea['id'] ?>">Eliminar</a> -->
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <!-- <br><br> -->
    <h3><a href="crear">Crear nueva tarea</a></h3>
</body>

</html>