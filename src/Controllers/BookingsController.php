<?php

namespace App\Controllers;

use App\Controller;

class BookingsController extends Controller
{
    public function bookNow()
    {
        $this->render('book-now');
    }
    
    public function bookings()
    {
        $this->render('bookings');
    }
}