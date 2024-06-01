<!DOCTYPE html>
<html>

<head>
    <title>Iniciar sesión</title>
</head>

<body>
    <h1>Iniciar sesión</h1>

    <form action="login" method="POST">
        <input type="email" name="correo" required placeholder="Correo electrónico:"><br><br>

        <input type="password" name="contrasena" required placeholder="Contraseña"><br><br>

        <button type="submit">Iniciar sesión</button>
    </form>
    <?php if (isset($error)): ?>
        <p><?= $error ?></p>
    <?php endif; ?>
</body>

</html>