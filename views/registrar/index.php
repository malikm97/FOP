<?php require 'views/header.php';?>

    <div class="container" >
        <!--Formularios-->
        <h1>Mi cuenta</h1>
        <div class="row" ng-controller="userCtrl">
            <div class="col-md-6 col-xl-5 mb-4">
                <h3>Iniciar sesion</h3>
                <div>{{notUser}}</div>
                <div class="form">
                    <i class="fa fa-envelope"></i>
                    <label for="">Correo electrónico</label>
                    <input type="email" ng-model="correoIniciar" class="form-control">
                </div>
                <div class="form">
                    <i class="fa fa-lock"></i>
                    <label for="">Contraseña</label>
                    <input type="password" ng-model="passIniciar" class="form-control">
                </div>
                <button class="btn btn-primary" type="button" ng-click="iniciarSesion()">Iniciar Sesión</button>
            </div>


            <div class="col-md-6 col-xl-5 mb-4">
                <h3>Registrate</h3>
                <div class="form">
                    <i class="fa fa-wpforms"></i>
                    <label for="">Nombre</label>
                    <p id="e_nombre"></p>
                    <input type="text" id="nombre" ng-model="nombreUsuario" class="form-control">
                </div>
                <div class="form">
                    <i class="fa fa-wpforms"></i>
                    <label for="">Apellido</label>
                    <p id="e_apellido"></p>
                    <input type="text" required id="apellido" ng-model="apellidoUsuario" class="form-control">
                </div>
                <div class="form">
                    <i class="fa fa-address-card"></i>
                    <label for="">DNI</label>
                    <p id="e_dni"></p>
                    <input type="text" id="apellido" ng-model="dniUsuario" class="form-control">
                </div>
                <div class="form">
                    <i class="fa fa-envelope"></i>
                    <label for="">Correo electrónico</label>
                    <p id="e_email"></p>
                    <input type="email" id="email" ng-model="correoElecUsuario" class="form-control">
                </div>
                <div class="form">
                    <i class="fa fa-lock"></i>
                    <label for="">Contraseña</label>
                    <p id="e_contra"></p>
                    <input type="password" id="contraseña" ng-model="passwordUsuario" class="form-control">
                </div>
                <div class="form">
                    <i class="fa fa-lock"></i>
                    <label for="">Confirmar contraseña</label>
                    <input type="password" ng-model="confirPwdUsuario" class="form-control">
                    <div>{{contraincorrecta}}</div>
                </div>
                <div class="form">
                    <i class="fa fa-wpforms"></i>
                    <label for="">Provincia</label>
                    <input type="text" ng-model="provinciaUsuario" class="form-control">
                </div>
                <div class="form">
                    <i class="fa fa-wpforms"></i>
                    <label for="">Ciudad</label>
                    <input type="text" ng-model="ciudadUsuario" class="form-control">
                </div>
                <div class="form">
                    <i class="fa fa-wpforms"></i>
                    <label for="">Direccion</label>
                    <input type="text" ng-model="direccionUsuario" class="form-control">
                </div>
                <div class="form">
                    <i class="fa fa-wpforms"></i>
                    <label for="">Codigo postal</label>
                    <input type="text" ng-model="codPostalUsuario" class="form-control">
                </div>
                <button class="btn btn-primary" id="enviar" type="button" ng-click="registrarUsuario()">Registrar</button>
            </div>
        </div>
        <!--Formularios-->


<?php require 'views/footer.php';?>