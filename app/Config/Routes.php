<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/halo', 'Halo::index');
$routes->get('/', 'Home::index');
$routes->get('/students', 'StudentController::index');
$routes->get('/students/create', 'StudentController::create');
$routes->post('/students/save', 'StudentController::save');
$routes->get('/students/edit/(:num)', 'StudentController::edit/$1');
$routes->post('/students/update/(:num)', 'StudentController::update/$1');
$routes->get('/students/delete/(:num)', 'StudentController::delete/$1');