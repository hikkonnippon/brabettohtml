<?php
include '/xampp/htdocs/ProyectV2/php/configphp/config.php';
include '/xampp/htdocs/ProyectV2/php/configphp/connection.php';

session_start();

// Verifica si hay información de usuario en la sesión
if (isset($_SESSION['usuario'])) {
    // Obtiene la información del usuario
    $nombre = $_SESSION['usuario']['nombre'];
    $apellido = $_SESSION['usuario']['apellido'];
    $correo = $_SESSION['usuario']['correo'];
} else {
    // Si no hay información de usuario en la sesión, redirige al usuario a la página de inicio de sesión
    header("Location: /ProyectV2/pages/registerlogin/login.php");
    exit(); // Asegura que el script se detenga después de la redirección
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- DEFAULT CONFIG -->
    <?php include '../../php/headconfig.php' ?>
    <!-- PAGE CONFIG -->
    <title>Brabetto Restaurant</title>
    <link rel="stylesheet" href="/ProyectV2/styles/components/stylelogin/login.css">
</head>
<body>
    <!-- HEADER -->
    <?php include '../../php/header.php'; ?>
    <!-- PAGINA PRINCIPAL -->
    <main class="mainpage">
        <h1>INFORMACIÓN DE USUARIO</h1>
        <div class="mainpage-userinfo">
            <p>Nombre: <?php echo $nombre; ?></p>
            <p>Apellido: <?php echo $apellido; ?></p>
            <p>Correo: <?php echo $correo; ?></p>
        </div>
        <div class="mainpage-logoutbutton">
        <form action="/ProyectV2/php/phplogic/logout.php" method="post">
            <button type="submit" name="logout">Cerrar Sesión</button>
        </form>
        </div>
    </main>
    <!-- FOOTER-->
    <?php include '../../php/footer.php'; ?>
</body>
</html>