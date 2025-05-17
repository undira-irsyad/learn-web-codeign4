<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('mahasiswa', 'Mahasiswa::index');
$routes->get('/post', 'Post::index');
$routes->get('/post/create', 'Post::create');
$routes->post('/post/save', 'Post::save');
$routes->get('/post/login', 'Post::login');
$routes->post('/post/loginAuth', 'Post::loginAuth');
$routes->get('/post/profile', 'Post::profile');
$routes->get('/post/logout', 'Post::logout');
