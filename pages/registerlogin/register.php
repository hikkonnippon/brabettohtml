<?php
include '/xampp/htdocs/ProyectV2/php/configphp/config.php';
include '/xampp/htdocs/ProyectV2/php/configphp/connection.php';
include '/xampp/htdocs/ProyectV2/php/phplogic/registeruser.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- DEFAULT CONFIG -->
    <?php include '../../php/headconfig.php' ?>
    <!-- PAGE CONFIG -->
    <title>Brabetto Restaurant</title>
    <link rel="stylesheet" href="/ProyectV2/styles/components/stylelogin/login.css">
</head>
<body>
    <!-- HEADER -->
    <?php include '../../php/header.php'; ?>
    <!-- PAGINA PRINCIPAL -->
        <main class="mainpage">
            <H1>REGÍSTRATE</H1>
            <form action autocomplete="off" method="post">
                <div class="mainpage-login">
                    <div class="mainpage-login-field">
                    <?php 
                    ?>
                    <div class="mainpage-login-field-input">
                            <label for="">Nombres <span>*</span></label>
                            <div class="mainpage-login-field-input-email">
                            <input type="text" placeholder="Nombres" name="nombre">
                            </div>
                    </div>
                    <div class="mainpage-login-field-input">
                            <label for="">Apellidos <span>*</span></label>
                            <div class="mainpage-login-field-input-email">
                            <input type="text" placeholder="Apellidos" name="apellido">
                            </div>
                    </div>
                        <div class="mainpage-login-field-input">
                            <label for="">Email <span>*</span></label>
                            <div class="mainpage-login-field-input-email">
                            <i class='bx bx-envelope bx-sm'></i>
                            <input type="email" placeholder="Correo electrónico" name="correo">
                            </div>
                        </div>
                        <div class="mainpage-login-field-input">
                            <label for="">Contraseña <span>*</span></label>
                            <div class="mainpage-login-field-input-password">
                            <i class='bx bx-lock-alt bx-sm' ></i>
                            <input id="password" type="password" placeholder="Contraseña" name="contraseña">
                            <button id="toggleButton" type="button"><span class="material-symbols-outlined">
                            visibility
                            </span></button>
                            <script src="/ProyectV2/js/password.js"></script>
                            </div>
                        </div>
                        <div class="mainpage-login-field-button">
                            <button class="button-login" name="register">Registrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    <!-- FOOTER-->
    <?php include '../../php/footer.php'; ?>
</body>
</html>