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

function Constantes(){
    echo '<h2>Constantes mágicas</h2>';
    echo '<p>Estos ejercicios están en el fichero '.__FILE__.'</p>';
    echo '<p>Estamos trabajando para la función '.__FUNCTION__.'</p>';
}
Constantes();



class SobreescribeHandler{

    public $rewrite;

    public function __construct($rewrite){
       $this->rewrite = $rewrite;
    }

    public function __toString(){
        return sprintf('Instancia intercambiada: %s (línea %d)',$this->rewrite,__LINE__);
    }
}

$sobreescribeHandler = new SobreescribeHandler('Hola Mundo!');
echo $sobreescribeHandler;
?>