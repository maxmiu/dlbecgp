<?php

namespace App\Controllers;

use App\Controller;
use App\Database\Database;
use App\Models\Booking;
use App\Models\Contact;
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

    public function success()
    {
        $id = $_GET['id'];
        $booking = $this->database->getById($id);
        $this->render('booking-success', ['booking' => $booking]);
    }

    public function book()
    {
        $notes = $_POST["notes"];
        $from = $_POST["from"];
        $to = $_POST["to"];
        $hotel = $_POST["hotel"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $dateRange = new DateRange($from, $to);
        $contact = new Contact($hotel, $name, $email);
        if (strtotime($from) > strtotime($to)) {
            $this->render('book-now', ['errors' => [
                'dateRange' => 'From must be before to'
            ]]);
            return;
        }
        $frameSizes = $this->getFrameSizes();
        $booking = Booking::new($dateRange, $contact, $frameSizes, $notes);
        if ($booking->getTotalAmount() == 0) {
            $this->render('book-now', ['errors' => [
                'frameSizes' => 'You must atleast book one bike'
            ]]);
            return;
        }
        $this->database->addBookings($booking);
        $this->redirect('booking-success?id=' . $booking->id);
    }

    private function getFrameSizes()
    {
        $xs = $_POST["frameSizeXS"];
        $s = $_POST["frameSizeS"];
        $m = $_POST["frameSizeM"];
        $l = $_POST["frameSizeL"];
        $xl = $_POST["frameSizeXL"];
        return [
            (object)["frameSize" => FrameSize::XS, "amount" => $xs],
            (object)["frameSize" => FrameSize::S, "amount" => $s],
            (object)["frameSize" => FrameSize::M, "amount" => $m],
            (object)["frameSize" => FrameSize::L, "amount" => $l],
            (object)["frameSize" => FrameSize::XL, "amount" => $xl],
        ];
    }
}
