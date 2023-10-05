<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/create', 'Pages::create');
$routes->post('/save', 'Pages::save');
$routes->get('/profile', 'Pages::profile');
$routes->get('/detail/(:segment)', 'Pages::detail/$1');
