<?php
declare(strict_types=1);

use SebastianBergmann\CodeCoverage\Report\PHP;

require_once './Car.php';


$lambo = new Car("Lamborghini", "1234ABC", "Gasolina", 300);
echo $lambo->boost() . PHP_EOL;
?>