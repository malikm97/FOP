<?php require 'views/header.php';?>


    <div class="container">
        <h1>Site Map</h1>
        <a href="<?php echo constant('URL')?>/main"><h4>Página Principal<h4></a><br>
        <a href="<?php echo constant('URL')?>/main"><h4>Productos caninos<h4></a><br>
        <a href="<?php echo constant('URL')?>/main"><h4>Productos felinos<h4></a><br>

        <h4>Cuenta FOPetz</h4>
            <?php session_start();
                if(isset($_SESSION['rol'])){
                    if($_SESSION['rol'] == "administrador"){
                        echo "<a href=\"" .  constant('URL') . "/administrador\"><h6>Mi cuenta</h6></a>";
                    }else if($_SESSION['rol'] == "usuario"){
                        echo "<a href=\"" .  constant('URL') . "/cuenta\"><h6>Mi cuenta</h6></a>";
                    }
                }else{
                    echo "<a href=\"" .  constant('URL') . "/registrar\"><h6>Mi cuenta</h6></a>";
                }
                session_destroy();
            ?>

        <h4>FOPetz Info</h4>
            <a href="aboutus.php"><h6>Sobre Nosotros<h6></a>
            <a href="contactus.php"><h6>Contactenos<h6></a>
            <a href="contactus.php"><h6>Politica de privacidad<h6></a>
            <a href="rss/rss.php" target="_blank"><h6>Servicio de suscripcion RSS<h6></a>

    <?php require 'views/footer.php';?>

        