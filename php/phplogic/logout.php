<?php
session_start();

// Cierra la sesión
session_destroy();

// Redirige a la página de inicio de sesión
header("Location: /ProyectV2/pages/registerlogin/login.php");
exit();
?>