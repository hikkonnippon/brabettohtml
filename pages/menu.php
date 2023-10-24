<!DOCTYPE html>
<html lang="en">
<head>
    <!-- DEFAULT CONFIG -->
    <?php include '../php/headconfig.php' ?>
    <!-- PAGE CONFIG -->
    <title>Brabetto Restaurant - Menú</title>
    <link rel="stylesheet" href="/styles/components/stylemenu/menupage.css">
</head>
<body>
    <!-- HEADER -->
    <?php include '../php/header.php'; ?>
    <!-- PAGINA PRINCIPAL -->
        <main class="mainpage">
            <H1>MENÚ</H1> 
            <div class="mainpage-elements">
                <a href="./menu/hamburguesas.php"><div class="mainpage-elements-hamburguesas">
                    <p>Hamburguesas</p>
                    <img src="../images/burger2.png" alt="">
                </div>
                </a>
                <a href="./menu/combos.php"><div class="mainpage-elements-combos">
                    <p>Combos</p>
                    <img src="../images/comboburger.png" alt="">
                </div>
                </a>
                <a href="./menu/adicionales.php"><div class="mainpage-elements-adicionales">
                    <p>Adicionales</p>
                    <img src="../images/adicionales.jpg" alt="">
                </div>
                </a>
                <a href="./promociones.php"><div class="mainpage-elements-promos">
                    <p>Promociones</p>
                    <img src="../images/promoburger.png" alt="">
                </div>
                </a>
            </div>
        </main>
    <!-- FOOTER-->
    <?php include '../php/footer.php'; ?>
</body>
</html>