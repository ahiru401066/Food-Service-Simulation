<?php

namespace FoodItems;

class Burger extends FoodItem {
    public const CATEGORY = "Burger";

    public function __construct(string $name, string $description, float $prime) {
        parent::__construct($name, $description, $prime);
    }

    public static function getCategory(){
        return self::CATEGORY;
    }
}