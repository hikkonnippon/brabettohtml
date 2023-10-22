<!DOCTYPE html>
<html lang="en">
<head>
    <!-- DEFAULT CONFIG -->
    <?php include '../php/headconfig.php' ?>
    <!-- PAGE CONFIG -->
    <title>Brabetto Restaurant - Promociones</title>
    <link rel="stylesheet" href="../styles/components/stylepromociones/promocionespage.css">
</head>
<body>
    <!-- HEADER -->
    <?php include '../php/header.php'; ?>
    <!-- PAGINA PRINCIPAL -->
    <main class="mainpage">
        <h1>PROMOCIONES</h1>
        <div class="mainpage-promos">
            <div class="mainpage-promos-section">
                <div class="mainpage-promos-section-card">
                    <div class="mainpage-promos-section-card-image">
                        <img src="../images/cumple.png" alt="">
                    </div>
                    <div class="mainpage-promos-section-card-info">
                        <h3>Promo Cumpleaños</h3>
                        <p>Por ser tu cumpleaños, te ofrecemos un descuento del 20% en todos nuestros productos.</p>
                    </div>
                </div>
                <div class="mainpage-promos-section-card">
                    <div class="mainpage-promos-section-card-image">
                        <img src="../images/ticket.jpg" alt="">
                    </div>
                    <div class="mainpage-promos-section-card-info">
                        <h3>Ticket de compras</h3>
                        <p>Por 12 compras acumulables en el mes te llevas gratis una Cheese Burger + 1 Porción de papas.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- FOOTER-->
    <?php include '../php/footer.php'; ?>
</body>
</html>