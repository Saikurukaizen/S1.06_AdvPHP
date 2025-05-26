<?php
declare(strict_types=1);

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

?>