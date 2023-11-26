<?php
    include '/xampp/htdocs/ProyectV2/php/configphp/config.php';
    include '/xampp/htdocs/ProyectV2/php/configphp/connection.php';

    
    include '/xampp/htdocs/ProyectV2/php/phplogic/shopping.php';
?>
<?php
    $total=0;
    foreach ($_SESSION['SHOPPING'] as $index=>$producto){

        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
        
    }
    echo "<h3>".$total."</h3>";
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