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

    protected function redirect($url)
    {
        header('Location: ' . $url, true, 302);
        exit();
    }
}
