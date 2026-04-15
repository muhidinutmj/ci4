<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halo', 'Halo::index');
$routes->get('/student', 'StudentController::index');
$routes->get('/student/create', 'StudentController::create');
$routes->post('/student/save', 'StudentController::save');