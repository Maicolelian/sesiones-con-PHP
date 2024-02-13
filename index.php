<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="administrador.php">Ir a pagina de administrador</a> <br>
    <a href="estandar.php">Ir a pagina de ususario</a>
    <?php
    session_start();
    $_SESSION['usuario'] = 'mai';
    $_SESSION['rol'] = 'estandar';
    // $_SESSION['rol'] = 'administrador';
    echo "<br> El usuario es: " . $_SESSION['usuario'];
    echo "<br> El rol es: " . $_SESSION['rol'];
    ?>
</body>
</html>