<?php 
    class Controller{

        function __construct(){
            //Este es el controlador base';
            $this->view = new View(); 
            
        }

        function loadModel($model){
            //Nombre de todas las vistas acabadas en model.php 
            $url = 'models/' . $model . 'model.php';

            if(file_exists($url)){
                require $url;

                $modelName = $model . 'Model';
                $this->model = new $modelName();
            }
        }
    }
?>