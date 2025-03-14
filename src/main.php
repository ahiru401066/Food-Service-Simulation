<?php

spl_autoload_extensions(".php");
spl_autoload_register(function($class) {
    $base_dir = __DIR__ ."/";
    $file = $base_dir . str_replace("\\","/", $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});


$pizza = new FoodItems\Pizza("tomato", "this is a tomato pizza", 5.0);
$pasta = new FoodItems\Pasta("Spaghetti", "this is spaghetti", 10.0);
$person = new Persons\Employees\Employee("tomoya", 22, "yamagata", 1, 10.0);

echo $pizza->getCategory().PHP_EOL;