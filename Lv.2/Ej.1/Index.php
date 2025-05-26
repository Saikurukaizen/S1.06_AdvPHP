<?php
declare(strict_types=1);

require_once './Enums.php';
require_once './StackResources.php';

$resource1 = new StackResources("PHP Official Documentation", Topic::PHP, "https://www.php.net/", TypeResource::WebPage);
$resource2 = new StackResources("CSS", Topic::CSS, "https://www.w3.org/Style/CSS/", TypeResource::WebPage);
$resource3 = new StackResources("HTML", Topic::HTML, "https://www.w3.org/html/", TypeResource::WebPage);
$resource4 = new StackResources("Curso completo de SQL", Topic::SQL, "https://www.youtube.com/watch?v=OuJerKzV5T0", TypeResource::Video);

echo $resource1 . PHP_EOL;
echo $resource2 . PHP_EOL;
echo $resource3 . PHP_EOL;
echo $resource4 . PHP_EOL;
?>