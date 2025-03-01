<?php

    class SesionHandler{
        public function __construct(){
            session_start();             
        }

        public function submitForm(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo 'The form was submitted.' .PHP_EOL;
                print_r($_POST);
                if(isset($_POST['nombre']) && $_POST['nombre']){
                    $_SESSION['session'] = $_POST['nombre'];
                    echo $_SESSION['session'].PHP_EOL;
                    echo ' Ejecutando la function '.__FUNCTION__.' en la línea '.__LINE__.PHP_EOL;
                }
                else{
                    echo 'No se ha enviado el formulario'.PHP_EOL;
                }
            }          
        }

        public function displayData(){
            if(isset($_SESSION['session']) && !empty($_SESSION['session'])){
                echo ' Sesión iniciada por: '.$_POST['nombre'].'. ';
            } else {
                echo 'No hay sesión iniciada';
            }
        }

        public function displayFormPath(){
           echo $_SERVER['DOCUMENT_ROOT'].'/form.php';
        }
    }

$sesionHandler = new SesionHandler();
$sesionHandler->submitForm();
$sesionHandler->displayData();
$sesionHandler->displayFormPath();

?>