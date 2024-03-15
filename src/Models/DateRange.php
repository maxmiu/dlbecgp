<?php

namespace App\Models;

use DateTime;

class DateRange
{
    public string $from;
    public string $to;

    public function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function getDaysDiff()
    {
        $to = new DateTime($this->to);
        $from = new DateTime($this->from);
        $diff= $to->diff($from);
        return $diff->d;
    }
}
