<?php

namespace App\Models;

class Booking
{
    public string $id;
    public int $amount;
    public DateRange $dateRange;
    public string $hotel;
    public string $notes;
    public array $frameSizes;
    public string $createdAt;

    public function __construct(string $id, string $createdAt, DateRange $dateRange, string $hotel, $frameSizes, string $notes)
    {
        $this->id = $id;
        $this->dateRange = $dateRange;
        $this->hotel = $hotel;
        $this->frameSizes = $frameSizes;
        $this->notes = $notes;
        $this->createdAt = $createdAt;
    }

    public static function new(DateRange $dateRange, string $hotel, $frameSizes, string $notes)
    {
        $id = uniqid();
        $createdAt = date('yyyy-MM-dd hh:mm');
        return new Booking($id, $createdAt, $dateRange, $hotel, $frameSizes, $notes);
    }

    public function getTotalAmount()
    {
        $allAmounts = array_map(function ($frameSize) {
            return $frameSize->amount;
        }, $this->frameSizes);
        return array_sum($allAmounts);
    }
}
