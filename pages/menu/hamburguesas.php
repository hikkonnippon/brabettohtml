<?php
    include '/xampp/htdocs/ProyectV2/php/configphp/config.php';
    include '/xampp/htdocs/ProyectV2/php/configphp/connection.php';

    
    include '/xampp/htdocs/ProyectV2/php/phplogic/shopping.php';
    
    // Inicia la sesión si no está iniciada
    if (!isset($_SESSION)) {
        session_start();
    }

    // Verificar si se está intentando agregar un producto
    if (isset($_POST['btnAccion']) && $_POST['btnAccion'] == 'Agregar') {
        // Verificar si hay una sesión de usuario
        if (!isset($_SESSION['usuario'])) {
            // No hay una sesión de usuario, redirige a la página de inicio de sesión
            header("Location: /ProyectV2/pages/registerlogin/login.php");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- DEFAULT CONFIG -->
    <?php include '../../php/headconfig.php' ?>
    <!-- PAGE CONFIG -->
    <title>Brabetto Restaurant - Hamburguesas</title>
    <link rel="stylesheet" href="/ProyectV2/styles/components/stylemenu/hamburguesas/hamburguesas.css">
</head>
<body>
    <!-- HEADER -->
    <?php include '../../php/header.php'; ?>
    <!-- PAGINA PRINCIPAL -->
    <main class="mainpage">
        <?php include '../../php/pagecomponents/menubar.php' ?>
        <div class="mainpage-menu">
        <div class="mainpage-window">
            <?php echo($mensaje); ?>
        </div>
        <div class="mainpage-menu-section">

        <?php
            $sentencia=$pdo->prepare("SELECT * FROM `tblhamburguesas`");
            $sentencia->execute();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            //print_r($listaProductos);
        ?>
        <?php foreach($listaProductos as $producto){?>
                <div class="mainpage-menu-section-elements">
                    <div class="mainpage-menu-section-elements-img"><img src="<?php echo $producto['Imagen'] ?>" alt=""></div>
                    <div class="mainpage-menu-section-elements-info">
                        <h2><?php echo $producto['Nombre'] ?></h2>
                        <p><?php echo $producto['Descripción'] ?></p>
                        <div class="mainpage-menu-section-elements-info-buy">
                            <h2>S/ <?php echo $producto['Precio'] ?></h2>

                            <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
                            <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
                            <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
                            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY); ?>">
                            <button name="btnAccion" value="Agregar" type="submit">Agregar</button>
                            </form>

                        </div>
                    </div>
                </div>     
        <?php }?>
        
        </div> 
        </div> 
    </main>
    <!-- FOOTER-->
    <?php include '../../php/footer.php'; ?>
</body>
</html>