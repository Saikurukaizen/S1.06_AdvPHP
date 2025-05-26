<?php
declare(strict_types=1);

require_once './traits.php';

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

?>