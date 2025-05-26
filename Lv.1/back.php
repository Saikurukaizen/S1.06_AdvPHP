<?php
declare(strict_types=1);

class MySessionHandler{
    
    public function __construct(){
        session_start();
    }

    public function getSession(): array{
        return $_SESSION;
    }

    public function setSession(string $key, string $value): void{
        $_SESSION[$key] = $value;
    }

    public function __get(string $name){
        return $_SESSION[$name] ?? null;
    }

    public function __set(string $name, string $value): void{
        $_SESSION[$name] = $value;
    }
}

$session = new MySessionHandler();
foreach($_SESSION as $key => $value){
    echo "<p>$key: $value</p>" . PHP_EOL;
}

if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
    $session->setSession('nombre', $_POST['nombre']);
}
if(isset($_POST['user']) && !empty($_POST['user'])){
    $session->setSession('user', $_POST['user']);
}

$session->nombre = $_POST['nombre'] ?? '';
$session->user = $_POST['user'] ?? '';

foreach ($session->getSession() as $key => $value) {
    echo "<p>$key: $value</p>" . PHP_EOL;
}

echo "Ruta del archivo: " . __FILE__ . "<br>" . PHP_EOL;
echo "Directorio del archivo: " . __DIR__ . "<br>" . PHP_EOL;


?>