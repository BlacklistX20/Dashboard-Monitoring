<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/temp', 'Pages::temp');
$routes->get('/electric', 'Pages::electric');
$routes->get('/fuel', 'Pages::fuel');
$routes->get('/lt4', 'Data::lt4');
$routes->get('/data', 'Data::save');
