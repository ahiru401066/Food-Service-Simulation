<?php

namespace FoodItems;

abstract class FoodItem {
    private string $name;
    private string $description;
    private float $price;

    public function __construct(string $name, string $description, float $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getPrice():float{
        return $this->price;
    }
    public function getName(): string{
        return $this->name;
    }

    abstract public static function getCategory();
}