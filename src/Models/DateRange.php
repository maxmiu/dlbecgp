<?php

namespace App\Models;

class DateRange
{
    public string $from;
    public string $to;

    public function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
}
