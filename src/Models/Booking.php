<?php

namespace App\Models;

class Journal
{
    public $date;
    public $bikes;

    public function __construct($date, $bikes)
    {
        $this->date = $date;
        $this->bikes = $bikes;
    }
}