<!DOCTYPE html>
<html lang="en">
<head>
    <!-- DEFAULT CONFIG -->
    <?php include './php/headconfig.php' ?>
    <!-- PAGE CONFIG -->
    <title>Brabetto Restaurant</title>
    <link rel="stylesheet" href="./styles/components/styleindex/index.css">
</head>
<body>
    <!-- HEADER -->
    <?php include './php/header.php'; ?>
    <!-- PAGINA PRINCIPAL -->
        <main class="mainpage">
            <div class="mainpage-cover">
                <div class="mainpage-cover-left">
                    <img src="./images/fast-food-menu-burger-picture-clipart-transparent--VBf6B2.png" alt="">
                </div>
                <div class="mainpage-cover-right">
                    <img src="./images/brabettoleter.png" alt="">
                    <span>¿Te animas a probar?</span>
                    <button>¡PIDE YA!</button>
                </div>
            </div>
            <div class="mainpage-promos">
                <div class="mainpage-promos-title">
                    <span>Promociones</span>
                </div>
                <div class="mainpage-promos-section">
                <a href="./pages/promociones/cumpleaños.php"><div class="mainpage-promos-section-card">
                    <div class="mainpage-promos-section-card-image">
                        <img src="./images/cumple.png" alt="">
                    </div>
                    <div class="mainpage-promos-section-card-info">
                        <h3>Promo Cumpleaños</h3>
                        <p>Por ser tu cumpleaños, te ofrecemos un descuento del 20% en todos nuestros productos.</p>
                    </div>
                </div></a>
                <a href="./pages/promociones/ticket.php"><div class="mainpage-promos-section-card">
                    <div class="mainpage-promos-section-card-image">
                        <img src="./images/ticket.jpg" alt="">
                    </div>
                    <div class="mainpage-promos-section-card-info">
                        <h3>Ticket de compras</h3>
                        <p>Por 12 compras acumulables en el mes te llevas gratis una Cheese Burger + 1 Porción de papas.</p>
                    </div>
                </div></a>
            </div>
            </div>
            <div class="mainpage-app">
                <div class="mainpage-app-left">
                    <img src="images/pedidosyaphone.png" alt="">
                </div>
                <div class="mainpage-app-right">
                    <span> Contamos con delivery a través de la aplicación de PedidosYa</span>
                    <img class="moto" src="images\moto.png" alt="">
                    <div class="minipage-app-right-download">
                        <a href="https://play.google.com/store/apps/details?id=com.pedidosya&hl=fr&gl=US">
                            <img class="googleplay" src="images/googleplay.png" alt="">
                        </a>
                        <a href="https://apps.apple.com/bz/app/pedidosya-delivery-app/id490099807?l=es">
                            <img src="images\appstore.png" alt="" class="appstore">
                        </a>
                        </div>
                </div>
            </div>
        </main>
    <!-- FOOTER-->
    <?php include './php/footer.php'; ?>
</body>
</html>