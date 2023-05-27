
    <?php require 'views/header.php';?>


    <div class="container">
        <!--OFERTA ENVIO-->
        <div class="row ofertaEnvio">
            <span class=" col-12">Envío gratuito en pedidos superiores a 49€</span>
        </div>
        <!--OFERTA ENVIO-->

        <!--SLIDER CON FOTOS Y OFERTAS-->
        <div id="demo" class="carousel slide corespo" data-ride="carousel">
		    <ul class="carousel-indicators">
		      <li data-target="#demo" data-slide-to="0" class="active"></li>
		      <li data-target="#demo" data-slide-to="1"></li>
		    </ul>
		    <div class="carousel-inner">
			    <div class="carousel-item active">
			        <img src="<?php echo constant('URL'); ?>/public/img/gato01 (2).jpg">
			        <div class="carousel-caption">
			        	<h3>Bienvenido a FOP</h3>
			        	<p>Aqui encontraras todo lo que necesites para tus mascotas!</p>
			        </div>   
			    </div>
			    <div class="carousel-item">
				    <img src="<?php echo constant('URL'); ?>/public/img/perro01 (2).jpg">
				    <div class="carousel-caption">
				        <h3>Los mejores productos Caninos</h3>
				    </div>   
			    </div>
		    </div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			</a>
		</div>
        <!--SLIDER CON FOTOS Y OFERTAS-->

        <!--BARRA DE BUSQUEDA-->
        <div class="row">
            <form class="form-inline col-12">
                <input class="d-inline form-control col-9" type="text" placeholder="Productos...">
                <button class="d-inline btn btn-primary col-3" type="submit">Search</button>
            </form>
        </div>
        <!--BARRA DE BUSQUEDA-->

        <!--CATEGORIAS-->
        <div class="row">
            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="<?php echo constant('URL'); ?>/public/img/perro02.jpg" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Colección<br>Perros</h3>
                        <a href="<?php echo constant('URL'); ?>/perros" class="cta-btn">Comprar <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="<?php echo constant('URL'); ?>/public/img/gato03.jpg" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Colección<br>Gatos</h3>
                        <a href="<?php echo constant('URL'); ?>/gatos" class="cta-btn">Comprar <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="<?php echo constant('URL'); ?>/public/img/marcas01.jpg" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Mejores<br>Marcas</h3>
                        <a href="<?php echo constant('URL'); ?>/marcas" class="cta-btn">Comprar <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->
        </div>
        <!-- row.// -->
        <!--CATEGORIAS-->

        <!--MAS VENDIDOS-->
        <div class="row" ng-controller="mainCtrl">
            <h3 class="col-12">LO MÁS VENDIDO</h3>
            <div ng-repeat="x in productos | orderBy: ordenarVentas | limitTo:4" class="col-md-3 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap">
                        <img src="<?php echo constant('URL'); ?>/{{x.imagen}}">
                    </div>
                    <figcaption class="info-wrap">
                        <h6 class="title text-dots"><a href="<?php echo constant('URL'); ?>/main/detalleProducto/{{x.ID_producto}}">{{x.nombre}}</a></h6>
                        <div class="action-wrap">
                            <a href="#" class="btn btn-primary btn-sm float-right"><i class="fa fa-shopping-cart"></i>Añadir</a>
                            <div class="price-wrap h5">
                                <span class="price-new">{{x.precio}}€</span>
                                <del class="price-old"></del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- action-wrap -->
                    </figcaption>
                </figure>
                <!-- card // -->
            </div>
            <!-- col // -->
        </div>
        <!-- row.// -->


        <!--MAS VENDIDOS-->

        <!--PRODUCTOS NUEVOS-->
        <div class="row" ng-controller="mainCtrl">
            <h3 class="col-12">PRODUCTOS FRESH NEW</h3>
            <div ng-repeat="x in productos" class="col-md-3 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap">
                        <img src="<?php echo constant('URL'); ?>/{{x.imagen}}">
                    </div>
                    <figcaption class="info-wrap">
                        <h6 class="title text-dots"><a href="<?php echo constant('URL'); ?>/main/detalleProducto/{{x.ID_producto}}">{{x.nombre}}</a></h6>
                        <div class="action-wrap">
                            <a href="#" class="btn btn-primary btn-sm float-right"><i class="fa fa-shopping-cart"></i>Añadir</a>
                            <div class="price-wrap h5">
                                <span class="price-new">{{x.precio}}€</span>
                                <del class="price-old"></del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- action-wrap -->
                    </figcaption>
                </figure>
                <!-- card // -->
            </div>
        </div>
        <!-- row.// -->
        <!--PRODUCTOS NUEVOS-->

        <?php require 'views/footer.php';?>

        