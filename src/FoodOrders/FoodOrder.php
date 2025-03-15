<?php

namespace FoodOrders;

class FoodOrder{
    private array $foodItems = [];
    private string $orderTime;

    public function __construct(array $foodItems, string $orderTime){
        $this->foodItems = $foodItems;
        $this->orderTime = $orderTime;
    }

    public function getFoodItems():array{
        return $this->foodItems;
    }

    public function getOrderTime():string{
        return $this->orderTime;
    }

    public function calculateFinalPrice():float{
        $totalPrice = 0;
        foreach($this->foodItems as $foodItem){
            $totalPrice += $foodItem->getPrice();
        }
        return $totalPrice;
    }
}