<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('nilai', 'Nilai::index');
$routes->get('/nilai/create', 'Nilai::create');
$routes->post('/nilai/store', 'Nilai::store');
$routes->get('/nilai/edit/(:num)', 'Nilai::edit/$1');
$routes->post('/nilai/update/(:num)', 'Nilai::update/$1');
$routes->get('/nilai/delete/(:num)', 'Nilai::delete/$1');
$routes->get('/nilai/exportPdf', 'Nilai::exportPdf');
