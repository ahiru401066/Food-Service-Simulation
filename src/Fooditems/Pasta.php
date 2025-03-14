<?php

namespace FoodItems;

class Pasta extends FoodItem {
    public const CATEGORY = "Pasta";

    public function __construct(string $name, string $description, float $prime) {
        parent::__construct($name, $description, $prime);
    }

    public static function getCategory(){
        return self::CATEGORY;
    }
}