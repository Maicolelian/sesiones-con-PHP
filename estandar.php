<?php
    session_start();
    if($_SESSION['rol'] === 'estandar') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <h1>Pagina del usuario</h1>
    <?php
    echo "<br> El usuario es: " . $_SESSION['usuario'];
    // unset($_SESSION['usuario']); // elimina la variable de sesion 
    echo "<br> El rol es: " . $_SESSION['rol'];
    ?>
    <?php
    if($_SESSION['rol'] === 'estandar') {
    ?>
    <p>Esta seccion solo la puede ver el usuario</p>
    <?php
    }
    ?>
</body>
</html>
<?php
    } else {
        echo "<center> <br> <br> Usted no tiene los permisos para acceder a esta pagina </center>";
    }
?> 