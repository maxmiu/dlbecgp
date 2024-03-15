<?php

namespace App\Database;

use App\Models\Booking;
use App\Models\DateRange;

class Database
{
    private $bookingsFile = "bookings.json";

    public function getBookings()
    {
        if (file_exists($this->bookingsFile) == false) {
            return [];
        }
        $bookingsRaw = file_get_contents($this->bookingsFile);
        $bookings = array_map(function ($b) {
            $dateRange = new DateRange($b->dateRange->from, $b->dateRange->to);
            return new Booking($dateRange, $b->hotel, $b->frameSizes, $b->notes);
        }, json_decode($bookingsRaw));
        return $bookings;
    }

    public function addBookings(Booking $booking)
    {
        $bookings = $this->getBookings();
        array_push($bookings, $booking);
        $json = json_encode($bookings, JSON_PRETTY_PRINT, 5);
        $file = fopen($this->bookingsFile, "w") or die("Unable to open BookingsFile");
        fwrite($file, $json);
        fclose($file);
    }
}
