<?php

namespace Persons\Customers;

class Customer extends \Persons\Person {
    public function __construct(string $name, int $age, string $address){
        parent::__construct($name, $age, $address);
    }

    public function interestedCategories(Restaurant $restaurant){
        //
    }
    public function order(Restaurant $restaurant, string $categories){
        //
    }
}