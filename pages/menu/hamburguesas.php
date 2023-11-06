<?php
    include '/xampp/htdocs/ProyectV2/php/configphp/config.php';
    include '/xampp/htdocs/ProyectV2/php/configphp/connection.php';
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
                            <button>Agregar</button>
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