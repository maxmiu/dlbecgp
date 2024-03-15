<?php

use App\Controllers\BookingsController;
use App\Controllers\HomeController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');

$router->get('/book-now', BookingsController::class, 'bookNow');
$router->get('/bookings', BookingsController::class, 'bookings');
$router->get('/booking-success', BookingsController::class, 'success');
$router->post('/book', BookingsController::class, 'book');

$router->dispatch();