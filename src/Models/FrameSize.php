<?php

namespace App\Models;

/**
 * Backed enumeration is needed for json_encode 
 * Also see: https://www.php.net/manual/en/language.enumerations.backed.php 
 */
enum FrameSize: string
{
    case XS = "XS";
    case S = "S";
    case M = "M";
    case L = "L";
    case XL = "XL";
}