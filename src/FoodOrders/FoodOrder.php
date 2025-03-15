<?php

namespace FoodOrders;

class FoodOrder{
    private array $foodItems = [];
    private string $orderTime;

    public function __construct(array $foodItems, string $orderTime){
        $this->foodItems = $foodItems;
        $this->orderTime = $orderTime;
    }
}