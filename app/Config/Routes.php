<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::home');
$routes->get('/projects', 'Pages::projects');
$routes->get('/about-me', 'Pages::aboutMe');