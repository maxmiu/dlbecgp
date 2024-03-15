<?php

namespace App\Models;

class Contact
{
    public string $hotel;
    public string $name;
    public string $email;

    public function __construct($hotel, $name, $email)
    {
        $this->hotel = $hotel;
        $this->name = $name;
        $this->email = $email;
    }
}
