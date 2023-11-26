<?php
// Inicia la sesión si no está iniciada
if (!isset($_SESSION)) {
    session_start();
}

// Obtiene el nombre de usuario de la sesión PHP
$usuarioNombre = isset($_SESSION['usuario']) ? $_SESSION['usuario']['nombre'] : '';
?>

<header>
    <div class="call_line"> <!-- ENCABEZADO LLAMAR -->
        <i class='bx bxs-phone bx-sm' ></i> 
        <span>Haz tu pedido al 947 364 843</span>
    </div>   
    <div class="mainbar"> <!-- ENCABEZADO PRINCIPAL -->
        <div class="mainbar-elements">
            <div class="mainbar-elements-left">
                <a href="/ProyectV2/index.php"><img height="42" src="/ProyectV2/images/brabettolenscut-removebg-preview.png" alt="Brabetto"></a>
                <span id="greetingMessage" data-username="<?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario']['nombre'] : ''; ?>"></span>
                        <script>
                            const greetingMessage = document.getElementById('greetingMessage');
                            const currentHour = new Date().getHours();

                            let greeting = '';
                            if (currentHour >= 5 && currentHour < 12) {
                                greeting = '¡Buenos días';
                            } else if (currentHour >= 12 && currentHour < 19) {
                                greeting = '¡Buenas tardes';
                            } else {
                                greeting = '¡Buenas noches';
                            }

                            // Obtener el nombre del usuario desde el atributo data-username
                            const usuarioNombre = greetingMessage.getAttribute('data-username');

                            // Mostrar el saludo con el nombre del usuario o '#BrabettoLover'
                            greetingMessage.textContent = `${greeting}, ${usuarioNombre || '#BrabettoLover'}!`;
                        </script>
            </div>
            <div class="mainbar-elements-right">
                <a href="/ProyectV2/pages/registerlogin/login.php"><div class="mainbar-elements-right-user">
                <?php
                // Verifica si hay información de usuario en la sesión
                    if (isset($_SESSION['usuario'])) {
                        // Si hay información, muestra el nombre y apellido con un enlace a userinfo.php
                        echo '<a href="/ProyectV2/pages/registerlogin/userinfo.php">
                                <i class="bx bxs-user bx-sm"></i>
                                <span>' . $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellido'] . '</span>
                            </a>';
                    } else {
                        // Si no hay información, muestra el enlace para iniciar sesión o registrarse
                        echo '<a href="/ProyectV2/pages/registerlogin/login.php">
                                <div class="mainbar-elements-right-user">
                                    <i class="bx bxs-user"></i>
                                    <span>Ingresa o regístrate</span>  
                                </div>
                            </a>';
                    }
                ?>
                </div></a>
            </div>
        </div>
    </div>
    <nav class="navi">   <!-- BARRA DE NAVEGACIÓN -->
        <div class="navi-menu">
            <a href="/ProyectV2/index.php"><span>INICIO</span></a>         
            <a href="/ProyectV2/pages/menu.php"><span>MENÚ</span></a>
            <a href="/ProyectV2/pages/promociones.php"><span>PROMOCIONES</span></a>
            <a href="/ProyectV2/pages/ubicanos.php"><span>UBÍCANOS</span></a>
        </div>
        <div class="navi-cart">
            <a href="/ProyectV2/pages/shoppingcart.php">
                <button class="navi-cart-button">
                    <i class='bx bx-cart bx-md'></i>
                    <span>
                        <?php
                        echo (empty($_SESSION['SHOPPING']))?0:count($_SESSION['SHOPPING']);
                        ?>
                    </span>
                </button>
                
            </a>
        </div>
    </nav>
</header>
<!-- ENCABEZADO MOBILE -->
<header class="mobileheader">
    <div class="call_line">
        <i class='bx bxs-phone bx-sm' ></i> 
        <span>Llamanos al 947 364 843</span>
    </div>   
    <div class="mobileheader-mainbar">
        <div class="mobileheader-mainbar-left">
            <a href="/ProyectV2/index.php"><img height="30" src="/ProyectV2/images/brabettolenscut-removebg-preview.png" alt="Brabetto"></a>
        </div>
        <div class="mobileheader-mainbar-right">
            <a href="/pages/registro/registro.php">
            <i class='bx bxs-user bx-md' ></i>
            </a>
        </div>
    </div>
    <nav class="mobileheader-nav">
        <a href="/ProyectV2/index.php"><i class='bx bx-home bx-sm'></i></a>         
        <a href="/ProyectV2/pages/menu.php"><i class='bx bx-food-menu bx-sm' ></i></a>
        <a href="/ProyectV2/pages/promociones.php"><i class='bx bx-news bx-sm'></i></a>
        <a href="/ProyectV2/pages/ubicanos.php"><i class='bx bx-map-alt bx-sm' ></i></a>
        <button class="mobileheader-nav-cart"><i class='bx bx-cart bx-sm'></i></button>
    </nav>
</header>