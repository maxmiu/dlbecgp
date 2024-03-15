<?php

namespace App\Models;

class Booking
{
    public int $amount;
    public DateRange $dateRange;
    public string $hotel;
    public string $notes;
    public array $frameSizes;

    public function __construct(DateRange $dateRange, string $hotel, $frameSizes, string $notes)
    {
        $this->dateRange = $dateRange;
        $this->hotel = $hotel;
        $this->frameSizes = $frameSizes;
        $this->notes = $notes;
    }

    public function getTotalAmount()
    {
        $allAmounts = array_map(function ($frameSize) {
            return $frameSize->amount;
        }, $this->frameSizes);
        return array_sum($allAmounts);
    }
}
