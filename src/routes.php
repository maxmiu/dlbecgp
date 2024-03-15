<?php

use App\Controllers\BookingsController;
use App\Controllers\HomeController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');

$router->get('/book-now', BookingsController::class, 'bookNow');
$router->get('/bookings', BookingsController::class, 'bookings');
$router->post('/book', BookingsController::class, 'book');

$router->dispatch();