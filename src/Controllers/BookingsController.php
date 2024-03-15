<?php

namespace App\Controllers;

use App\Controller;
use App\Database\Database;
use App\Models\Booking;
use App\Models\DateRange;
use App\Models\FrameSize;

class BookingsController extends Controller
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function bookNow()
    {
        $this->render('book-now');
    }

    public function bookings()
    {
        $bookings = $this->database->getBookings();
        $this->render('bookings', ['bookings' => $bookings]);
    }

    public function book()
    {
        $notes = $_POST["notes"];
        $from = $_POST["from"];
        $to = $_POST["to"];
        $hotel = $_POST["hotel"];
        $dateRange = new DateRange($from, $to);
        $frameSizes = $this->getFrameSizes();
        $booking = new Booking($dateRange, $hotel, $frameSizes, $notes);
        $this->database->addBookings($booking);
        $this->redirect("/bookings");
    }

    private function getFrameSizes()
    {
        $xs = $_POST["frameSizeXS"];
        $s = $_POST["frameSizeS"];
        $m = $_POST["frameSizeM"];
        $l = $_POST["frameSizeL"];
        $xl = $_POST["frameSizeXL"];
        return [
            ["frameSize" => FrameSize::XS, "amount" => $xs],
            ["frameSize" => FrameSize::S, "amount" => $s],
            ["frameSize" => FrameSize::M, "amount" => $m],
            ["frameSize" => FrameSize::L, "amount" => $l],
            ["frameSize" => FrameSize::XL, "amount" => $xl],
        ];
    }
}
