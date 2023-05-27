<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php echo constant('URL'); ?>/public/img/logo.ico" />

    <title>Index</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/bootstrap.min.css">

    <!-- Hoja de estilos propio -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/style.css">

    <!-- Archivo para iconos -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/font-awesome.min.css">

    <!-- Google font -->
    <link href="<?php echo constant('URL'); ?>/public/font/Lato-Regular.ttf">

    <!-- Framework AngularJS -->
    <script src="<?php echo constant('URL'); ?>/public/js/angular.js"></script>
    <script src="<?php echo constant('URL'); ?>/public/js/angulars/app.js"></script>
    <script src="<?php echo constant('URL'); ?>/public/js/angulars/controller.js"></script>

    <!--PayPal-->
    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    
    <!--Scripts-->
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body class="" ng-app="myApp">
    <!--HEADER-->
    <header>
        <nav class="navbar navbar-expand-md bg-white navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="<?php echo constant('URL'); ?>/main">
                <img src="<?php echo constant('URL'); ?>/public/img/logo.png" alt="" style="width: 10em">
            </a>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo constant('URL'); ?>/main">Página Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo constant('URL'); ?>/marcas">Marcas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo constant('URL'); ?>/perros">Perros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo constant('URL'); ?>/gatos">Gatos</a>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php session_start();
                        if(isset($_SESSION['rol'])){
                            if($_SESSION['rol'] == "administrador"){
                                echo "<a class=\"nav-link\" href=\"" .  constant('URL') . "/administrador\"><i class=\"fa fa-user-o\"></i>Administrador</a>";
                            }else if($_SESSION['rol'] == "usuario"){
                                echo "<a class=\"nav-link\" href=\"" .  constant('URL') . "/cuenta\"><i class=\"fa fa-user-o\"></i>Mi cuenta</a>";
                            }
                        }else{
                            echo "<a class=\"nav-link\" href=\"" .  constant('URL') . "/registrar\"><i class=\"fa fa-user-o\"></i>Iniciar sesion</a>";
                        }
                        session_destroy();
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <!--HEADER-->