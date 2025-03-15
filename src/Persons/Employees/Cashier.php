<?php

namespace Persons\Employees;

use DateTime;
use FoodOrders\FoodOrder;
use Invoices\Invoice;
use Restaurants\Restaurant;

class Cashier extends Employee {
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary){
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(array $orderItemList):FoodOrder{
        $now = date("Y-m-d H:i:s");
        $foodOrder = new FoodOrder($orderItemList, $now);
        return $foodOrder;
    }

    public function generateInvoice(FoodOrder $foodOrder):Invoice{
        // $foodOrderから日時やトータルプライスを取得する
        $invoice = new Invoice(10.0, "2025", 10);
        return $invoice;
    }
}