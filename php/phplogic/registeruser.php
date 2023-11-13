<?php

$mensaje = "";

if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['correo']) && !empty($_POST['contraseña'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Hash de la contraseña
    $hashContraseña = password_hash($contraseña, PASSWORD_DEFAULT);

    $sentencia = $pdo->prepare("INSERT INTO users (Nombres, Apellidos, Correo, Contraseña) VALUES (?, ?, ?, ?)");
    $sentencia->execute([$nombre, $apellido, $correo, $hashContraseña]);

    // Guardar información en la sesión
    session_start();
    $_SESSION['usuario'] = [
        'nombre' => $nombre,
        'apellido' => $apellido,
        'correo' => $correo
    ];

    // Redirigir a la página principal
    header("Location: /ProyectV2/index.php");
    exit();
} else {
    $mensaje = "Uno o más campos están vacíos";
}
?>