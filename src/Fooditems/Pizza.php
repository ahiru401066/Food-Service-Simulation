<?php

namespace FoodItems;

class Pizza extends FoodItem {
    public const CATEGORY = "Pizza";

    public function __construct(string $name, string $description, float $prime) {
        parent::__construct($name, $description, $prime);
    }

    public static function getCategory(){
        return self::CATEGORY;
    }
}