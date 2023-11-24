<?php
if (isset($_POST['login'])) {
    // Recupera los datos del formulario
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Busca al usuario en la base de datos
    $stmt = $pdo->prepare("SELECT * FROM users WHERE Correo = ?");
    $stmt->execute([$correo]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica si el usuario existe y la contraseña es válida
    if ($usuario && password_verify($contraseña, $usuario['Contraseña'])) {
        // Inicia la sesión
        session_start();

        // Guarda información del usuario en la sesión
        $_SESSION['usuario'] = [
            'id' => $usuario['ID'],
            'nombre' => $usuario['Nombres'],
            'apellido' => $usuario['Apellidos'],
            'correo' => $usuario['Correo']
        ];

        // Redirige a la página de inicio
        header("Location: /ProyectV2/index.php");
        exit();
    } else {
        echo "Correo o contraseña incorrectos";
    }
}
?>