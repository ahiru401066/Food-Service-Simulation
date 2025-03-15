<?php

namespace Restaurants;

use Invoices\Invoice;

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

    public function getAvailableCategories():array{
        $categories = [];
        foreach($this->menuItems as $menuItem){
            $categories[] = $menuItem->getCategory();
        }
        return $categories;
    }

    private function getSameCategoryFoodItems(array $orderCategories){
        $orderItems = [];
        foreach($this->menuItems as $menuItem){
            if(in_array($menuItem::getCategory(), $orderCategories))
            $orderItems[] = $menuItem;
        }
        return $orderItems;
    }

    public function order(array $orderCategories):Invoice{
        $orderList = $this->getSameCategoryFoodItems($orderCategories);
        $foodOrder = $this->employees[1]->generateOrder($orderList);
        $this->employees[0]->prepareFood($foodOrder);
        $invoice = $this->employees[1]->generateInvoice($foodOrder);
        return $invoice;
    }
}