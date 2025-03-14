<?php

namespace FoodItems;

abstract class FoodItem {
    private string $name;
    private string $description;
    private float $prime;

    public function __construct(string $name, string $description, float $prime) {
        $this->name = $name;
        $this->description = $description;
        $this->prime = $prime;
    }

    abstract public static function getCategory();
}