<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter'=>'noauth']);
$routes->get('/register', 'Home::register', ['filter'=> 'noauth']);
$routes->post('/register', 'Home::userRegister');
$routes->get('/dashboard', 'DashboardController::index', ['filter'=> 'auth']);
