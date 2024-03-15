<?php

namespace App\Models;

class Booking
{
    public string $id;
    public int $amount;
    public DateRange $dateRange;
    public Contact $contact;
    public string $notes;
    public array $frameSizes;
    public string $createdAt;

    public function __construct(string $id, string $createdAt, DateRange $dateRange, Contact $contact, $frameSizes, string $notes)
    {
        $this->id = $id;
        $this->dateRange = $dateRange;
        $this->contact = $contact;
        $this->frameSizes = $frameSizes;
        $this->notes = $notes;
        $this->createdAt = $createdAt;
    }

    public static function new(DateRange $dateRange, Contact $contact, $frameSizes, string $notes)
    {
        $id = uniqid();
        $createdAt = date('yyyy-MM-dd hh:mm');
        return new Booking($id, $createdAt, $dateRange, $contact, $frameSizes, $notes);
    }

    public function getTotalAmount()
    {
        $allAmounts = array_map(function ($frameSize) {
            return $frameSize->amount;
        }, $this->frameSizes);
        return array_sum($allAmounts);
    }
}
