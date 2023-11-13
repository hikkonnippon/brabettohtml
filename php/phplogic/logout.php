<?php
session_start();

// Cierra la sesión
session_destroy();

// Redirige a la página de inicio de sesión (o cualquier otra página que desees)
header("Location: /ProyectV2/pages/registerlogin/login.php");
exit();
?>