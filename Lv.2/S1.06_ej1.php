<?php
declare(strict_types=1);


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

    public function __toString(): string{
        return "
        Resource Name: ".$this->name.",
        Topic: ".$this->topicLanguage->name.",
        URL: ".$this->url.",
        Type: ".$this->typeResource->name." 
        ";
    }
}

$resource1 = new StackResources("PHP Official Documentation", Topic::PHP, "https://www.php.net/", TypeResource::WebPage);
$resource2 = new StackResources("CSS", Topic::CSS, "https://www.w3.org/Style/CSS/", TypeResource::WebPage);
$resource3 = new StackResources("HTML", Topic::HTML, "https://www.w3.org/html/", TypeResource::WebPage);
$resource4 = new StackResources("Curso completo de SQL", Topic::SQL, "https://www.youtube.com/watch?v=OuJerKzV5T0", TypeResource::Video);

?>