    <!-- FOOTER -->
    <footer id="footer">
            <!-- top footer -->
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-4 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Categorias</h3>
                                <ul class="footer-links">
                                    <li><a href="<?php echo constant('URL'); ?>/marcas">Marcas</a></li>
                                    <li><a href="<?php echo constant('URL'); ?>/perros">Perros</a></li>
                                    <li><a href="<?php echo constant('URL'); ?>/gatos">Gatos</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="clearfix visible-xs"></div>

                        <div class="col-md-4 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Información</h3>
                                <ul class="footer-links">
                                    <li><a href="#">Sobre Nosotros</a></li>
                                    <li><a href="#">Contactános</a></li>
                                    <li><a href="#">Politíca de privacidad</a></li>
                                    <!--<li><a href="#">Terminos & Condiciones</a></li>-->
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Servicios</h3>
                                <ul class="footer-links">
                                <?php
                                    if(isset($_SESSION['rol'])){
                                        if($_SESSION['rol'] == "administrador"){
                                            echo "<li><a href=\"" .  constant('URL') . "/administrador\">Administrador</a></li>";
                                        }else if($_SESSION['rol'] == "usuario"){
                                            echo "<li><a href=\"" .  constant('URL') . "/cuenta\">Mi cuenta</a></li>";
                                        }
                                    }else{
                                        echo "<li><a href=\"" .  constant('URL') . "/registrar\">Iniciar sesion</a></li>";
                                    }
                                ?>
                                    <li><a href="#">Cesta de la compra</a></li>
                                    <li><a href="<?php echo constant('URL'); ?>/sitemap">Site Map</a></li>
                                    <li><a href="<?php echo constant('URL'); ?>/rss/rss.php" target="_blank"><img src="<?php echo constant('URL'); ?>/public/img/rss.png" style="width: 10%;"></i>Servicio de suscripcion RSS</a></li>
                                    <li><div id=idpay></div></li>
                                </ul>
                            </div>
                        </div>
                        <span class="col-12 copyright">
                            Copyright &copy; 2019 All rights reserved 
                        </span>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /top footer -->
        </footer>
        <!-- /FOOTER -->
    </div>
    <!--/Container-->
</body>

</html>