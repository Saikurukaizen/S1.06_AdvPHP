<?php
declare(strict_types=1);

//Ej.1

enum Topic{
    case PHP;
    case CSS;
    case HTML;
    case SQL;
    Case Laravel;
}

enum TypeResource{
    case File;
    case WebPage;
    case Video;
}
class StackResources{
    private string $name;
    private Topic $topicLanguage;
    private string $url;
    private TypeResource $typeResource;

    public function __construct(string $name, Topic $topicLanguage, string $url, TypeResource $typeResource){
        $this->name = $name;
        $this->topicLanguage = $topicLanguage;
        $this->url = $url;
        $this->typeResource = $typeResource;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getTopicLanguage(): Topic{
        return $this->topicLanguage;
    }

    public function getUrl(): string{
        return $this->url;
    }

    public function getTypeResource(): TypeResource{
        return $this->typeResource;
    }
}

//EJ.2

trait Turbo{
    public function boost(): string{
        return "Boost activated! Starting engines...";
    }
}
class Car{
    private string $marca;
    private string $matricula;
    private string $combustible;
    private int $velMaxima;

    use Turbo;

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