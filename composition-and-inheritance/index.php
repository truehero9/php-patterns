<?php

spl_autoload_register(function($class) {
    require_once __DIR__ . '/' . $class . '.php';
});


$types = [];

$types[] = new Seminar(41, new TimeCostStrategy());
$types[] = new Lecture(4, new FixedCostStrategy());


foreach($types as $type) {
    echo "{$type->chargeType()} {$type->cost()}" . PHP_EOL;
}
