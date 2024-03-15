<?php

namespace App;

class Controller
{
    protected function render($view, $data = [])
    {
        extract($data);
        extract(['view' => $view]);

        include "Views/index.php";
    }
}