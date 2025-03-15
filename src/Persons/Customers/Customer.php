<?php

namespace Persons\Customers;

use Restaurants\Restaurant;

class Customer extends \Persons\Person {
    private array $interestedCategories;
    public function __construct(string $name, int $age, string $address, array $interestedCategories){
        parent::__construct($name, $age, $address);
        $this->interestedCategories = $interestedCategories;
    }

    public function getInterestedCategories(): array{
        // Customerが興味のあるカテゴリ
        return $this->interestedCategories;
    }

    public function interestedCategories(Restaurant $restaurant):array{
        // Customerの興味のあるもの、かつ、Restaurantの提供できるものを出力
        $customerInterestedCategories = $this->getInterestedCategories();
        $restaurantAvailableCategories = $restaurant->getAvailableCategories();
        return array_intersect($customerInterestedCategories, $restaurantAvailableCategories);
    }
    public function order(Restaurant $restaurant, string $categories){
        //
    }
}