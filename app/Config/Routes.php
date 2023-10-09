<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LoginController::index');
$routes->get('home', 'HomeController::index' , ['as' => 'home']);

$routes->get('login', 'LoginController::index');
$routes->post('login', 'LoginController::store', ['as' => 'login.store']);
