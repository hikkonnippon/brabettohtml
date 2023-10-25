<!DOCTYPE html>
<html lang="en">
<head>
    <!-- DEFAULT CONFIG -->
    <?php include '../../php/headconfig.php' ?>
    <!-- PAGE CONFIG -->
    <title>Brabetto Restaurant</title>
    <link rel="stylesheet" href="/styles/components/stylelogin/login.css">
</head>
<body>
    <!-- HEADER -->
    <?php include '../../php/header.php'; ?>
    <!-- PAGINA PRINCIPAL -->
        <main class="mainpage">
            <H1>INGRESA</H1>
            <form action autocomplete="off" method="post">
                <div class="mainpage-login">
                    <div class="mainpage-login-field">
                        <div class="mainpage-login-field-input">
                            <label for="">Email <span>*</span></label>
                            <div class="mainpage-login-field-input-email">
                            <i class='bx bx-envelope bx-sm'></i>
                            <input type="email" placeholder="Correo electrónico">
                            </div>
                        </div>
                        <div class="mainpage-login-field-input">
                            <label for="">Contraseña <span>*</span></label>
                            <div class="mainpage-login-field-input-password">
                            <i class='bx bx-lock-alt bx-sm' ></i>
                            <input id="password" type="password" placeholder="Contraseña">
                            <button id="toggleButton" type="button"><span class="material-symbols-outlined">
                            visibility
                            </span></button>
                            <script src="/js/password.js"></script>
                            </div>
                        </div>
                        <div class="mainpage-login-field-button">
                            <button class="button-login">Ingresar</button>
                        </div>
                    </div>
                    <div class="mainpage-login-socialmedia">
                        <span>Ingresa con:</span>
                        <div class="mainpage-login-socialmedia-icons">
                            <a href=""><i class='bx bxl-gmail bx-lg' ></i></a>
                            <a href=""><i class='bx bxl-facebook-circle bx-lg'></i></a>
                        </div>
                    </div>
                </div>
                <div class="mainpage-register">
                    <h2>¿No una tienes cuenta?</h2>
                    <span>Crea una aquí</span>
                    <button>Registrate</button>
                </div>
            </form>
        </main>
    <!-- FOOTER-->
    <?php include '../../php/footer.php'; ?>
</body>
</html>