<?php

spl_autoload_extensions(".php");
spl_autoload_register(function($class) {
    $base_dir = __DIR__ ."/";
    $file = $base_dir . str_replace("\\","/", $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});


$pizza = new FoodItems\Pizza("pizza", "this is a tomato pizza", 20.0);
$pasta = new FoodItems\Pasta("Spaghetti", "this is spaghetti", 10.0);
$burger = new FoodItems\burger("hamburger", "this is a hamburger",30.0);
$cashier = new Persons\Employees\Cashier("cashier", 22, "yamagata", 1, 10.0);
$chef = new Persons\Employees\Chef("chef", 25, "tokyo", 2, 100);
$restaurant = new Restaurants\Restaurant([$pizza, $pasta, $burger], [$chef, $cashier]);
$interestedList = ["Pizza", "Burger"];// Customerが興味を持っているカテゴリ Burger, Pizza, Pastaのカテゴリとそれぞれの個数
$customer = new Persons\Customers\Customer("customer", 22, "tokyo", $interestedList);

echo "---------------------------------------------- start ---------------------------------------------------\n";
$invoice = $customer->order($restaurant);
$invoice->printInvoice();
echo "------------------------------------------------end-----------------------------------------------------\n";