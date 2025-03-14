<?php

spl_autoload_extensions(".php");
spl_autoload_register();

$pizza = new FoodItems\Pizza("tomato", "this is a tomato pizza", 5.0);

echo $pizza->getCategory().PHP_EOL;