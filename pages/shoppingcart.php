<?php
    include '/xampp/htdocs/ProyectV2/php/configphp/config.php';
    include '/xampp/htdocs/ProyectV2/php/configphp/connection.php';

    
    include '/xampp/htdocs/ProyectV2/php/phplogic/shopping.php';
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
        <h1>CARRITO</h1>
        <?php if (!empty($_SESSION['SHOPPING'])) {?>
        <table class="mainpage-content">
            <tbody class="mainpage-content-body">
                <tr>
                    <th >Descripción</th>
                    <th >Cantidad</th>
                    <th >Precio</th>
                    <th >Total</th>
                    <th >--</th>
                </tr>
                <?php $total=0; ?>
                <?php foreach ($_SESSION['SHOPPING'] as $index=>$producto) { ?>
                <tr>
                    <td ><?php echo $producto['NOMBRE'] ?></td>
                    <td ><?php echo $producto['CANTIDAD'] ?></td>
                    <td ><?php echo $producto['PRECIO'] ?></td>
                    <td ><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
                    <td >
                    <form action="" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
                        <button type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
                    </form>
                    </td>
                </tr>
                <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
                <?php } ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right"><span>S/ <?php echo number_format($total, 2) ?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5">
                        <form action="pages\pay.php">
                            <button class="paybutton" type="submit" value="proceder">
                                Proceder al pago
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php } else{ ?>
            <div>
                <h2>No hay productos</h2>
                <h3>¿Quieres agregar productos?</h3>
                <a href="/ProyectV2/pages/menu.php"><button>Agregar</button></a>
            </div>
        <?php }; ?>

    </main>

    <!-- FOOTER-->
    <?php include '../php/footer.php'; ?>
</body>
</html>