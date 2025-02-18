<?php

if(!class_exists('SesionHandler')){
    class SesionHandler{
        public function __construct(){
            session_start();
             
        }

        public function FormHandler(){
            if(isset($_POST['action']) && !empty($_POST['action'])){
                if($_POST['action'] == 'form'){
                    echo 'The form was submitted. ';
                    print_r($_POST);
                    if(isset($_POST['nombre']) && $_POST['nombre']){
                        $_SESSION['session'] = $_POST['nombre'];
                        echo $_SESSION['session'];
                        print ' Ejecutando la function '.__FUNCTION__.' en la línea '.__LINE__;
                    }
                }           
            }
        }

        public function SessionData(){
            if(isset($_SESSION['session']) && !empty($_SESSION['session'])){
                echo ' Sesión iniciada por: '.$_POST['nombre'].'. ';
            } else {
                echo 'No hay sesión iniciada';
            }
        }

        public function Path(){
           echo $_SERVER['DOCUMENT_ROOT'].'/form.php';
        }
    }
}

$sesion = new SesionHandler();
$sesion->FormHandler();
$sesion->SessionData();
$sesion->Path();

?>