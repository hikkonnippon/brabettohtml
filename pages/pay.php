<?php
    include '/xampp/htdocs/ProyectV2/php/configphp/config.php';
    include '/xampp/htdocs/ProyectV2/php/configphp/connection.php';

    include '/xampp/htdocs/ProyectV2/php/phplogic/shopping.php';

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

    $total = 0;
    $SID = session_id();
    $NombreCompleto = $nombre . ' ' . $apellido;

    foreach ($_SESSION['SHOPPING'] as $index => $producto) {
        $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']);
    }

    $sentencia = $pdo->prepare("INSERT INTO `tblventas` (`ID`, `TransactionKey`, `PayPalData`, `Fecha`, `Correo`, `Nombre`, `Total`, `status`) VALUES (NULL, :TransactionKey, '', NOW(), :Correo, :NombreCompleto, :Total, 'pendiente')");

    $sentencia->bindParam(":TransactionKey", $SID);
    $sentencia->bindParam(":Correo", $correo);
    $sentencia->bindParam(":NombreCompleto", $NombreCompleto);
    $sentencia->bindParam(":Total", $total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();


    foreach ($_SESSION['SHOPPING'] as $index => $producto) {

        $sentencia = $pdo->prepare("INSERT INTO 
        `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) VALUES (NULL,:IDVENTA,:IDPRODUCTO, :PRECIOUNITARIO,:CANTIDAD, '0');");
        $sentencia->bindParam(":IDVENTA", $idVenta);
        $sentencia->bindParam(":IDPRODUCTO", $producto['ID']);
        $sentencia->bindParam(":PRECIOUNITARIO", $producto['PRECIO']);
        $sentencia->bindParam(":CANTIDAD", $producto['CANTIDAD']);
        $sentencia->execute();
}
    echo "<h3>" . $total . "</h3>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- DEFAULT CONFIG -->
    <?php include '../php/headconfig.php' ?>
    <!-- PAGE CONFIG -->
    <title>Brabetto Restaurant - Ubicanos</title>
    <link rel="stylesheet" href="../styles/components/styleshoppingcart/shoppingcart.css">
</head>
<body>
    <!-- HEADER -->
    <?php include '../php/header.php'; ?>
    <!-- PAGINA PRINCIPAL -->
    <main class="mainpage">
        

    </main>

    <!-- FOOTER-->
    <?php include '../php/footer.php'; ?>
</body>
</html>