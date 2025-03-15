<?php

namespace Persons\Employees;

use FoodOrders\FoodOrder;

class Chef extends Employee {
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary){
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function prepareFood(FoodOrder $foodOrder):void{
        echo "\n";
        foreach($foodOrder->getFoodItems() as $foodItem){
            echo "chef is cooking : " . $foodItem->getName(). "\n";
        }
        echo "\n";
    }
}