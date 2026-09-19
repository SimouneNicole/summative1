<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'TaskSystem::welcome');
$routes->get('/tasks', 'TaskSystem::taskList');
$routes->get('/profile', 'TaskSystem::profile');
$routes->get('/about', 'TaskSystem::about');