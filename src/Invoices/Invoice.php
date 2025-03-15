<?php

namespace Invoices;

class Invoice{
    private float $finalPrice;
    private string $orderTime;
    private int $estimateMinutes;
    
    public function __construct(float $finalPrice, string $orderTime, int $estimateMinutes){
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimateMinutes = $estimateMinutes;
    }
    public function printInvoice(): void {
        echo "================= Invoice =================\n";
        echo "\n";
        echo "Final Price      : ¥" . number_format($this->finalPrice, 2) . "\n";
        echo "Order Time       : " . $this->orderTime . "\n";
        echo "\n";
        echo "===========================================\n";
    }
    
}