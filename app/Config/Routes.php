<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/Home', 'Home::index');
$routes->get('testDb', 'DbTestController::index');
$routes->get('folio', 'Home::potfolio');
$routes->get('innerPage', 'Home::innerPage');
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/login/logout', 'Login::logout');
