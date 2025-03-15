<?php

namespace Restaurants;

class Restaurant {
    private array $menuItems = [];
    private array $employees = [];

    public function __construct(array $menuItems, array $employees){
        $this->menuItems = $menuItems;
        $this->employees = $employees;
    }

    public function getMenuItems():array{
        return $this->menuItems;
    }

    public function getEmployees():array{
        return $this->employees;
    }

    public function order(array $categories){
        //
    }
}