<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halo', 'Halo::index');
$routes->get('/template', function() {
    return view('layout/template');
});