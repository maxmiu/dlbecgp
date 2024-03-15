<?php

namespace App\Database;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\DateRange;
use Error;

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
            $contact = new Contact($b->contact->hotel, $b->contact->name, $b->contact->email);
            return new Booking($b->id, $b->createdAt, $dateRange, $contact, $b->frameSizes, $b->notes);
        }, json_decode($bookingsRaw));
        return $bookings;
    }

    public function getById($id)
    {
        $bookings = $this->getBookings();
        $result = array_filter($bookings, function ($booking) use ($id) {
            return $booking->id == $id;
        });
        if (empty($result) || count($result) > 1) {
            throw new Error("Unable to find single array entry with id " . $id);
        }
        return current($result);
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
