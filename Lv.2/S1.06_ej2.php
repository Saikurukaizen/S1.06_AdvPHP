<?php
declare(strict_types=1);

trait Turbo{
    public function boost(): string{
        return "Boost activated! Starting engines...";
    }
}

class Car{
    
    use Turbo;
    private string $marca;
    private string $matricula;
    private string $combustible;
    private int $velMaxima;

    public function __construct(string $marca, string $matricula, string $combustible, int $velMaxima){
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->combustible = $combustible;
        $this->velMaxima = $velMaxima;
    }

    public function getMarca(): string{
        return $this->marca;
    }

    public function getMatricula(): string{
        return $this->matricula;
    }

    public function getCombustible(): string{
        return $this->combustible;
    }

    public function getVelMaxima(): int{
        return $this->velMaxima;
    }
}

$lambo = new Car("Lamborghini", "1234ABC", "Gasolina", 300);
echo $lambo->boost();
?>