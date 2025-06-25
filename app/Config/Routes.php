<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/credit_ci4', 'Home::index'); //default root

// SQL >> Memory
$routes->get('/', 'Sqlmemory::index'); // set Root Path
// $routes->get('/sql', 'Sqlmemory::index');
$routes->get('/sql/content', 'Sqlmemory::content');
$routes->get('/sql/content/(:any)', 'Sqlmemory::selected');
$routes->get('/sql/history', 'Sqlmemory::history');
$routes->get('/sql/history/(:any)', 'Sqlmemory::history2/$1');
$routes->get('/sql/list/(:num)', 'Sqlmemory::sqllist/$1');
$routes->get('/sql/memory', 'Sqlmemory::memory');

$routes->post('/sql/add', 'Sqlmemory::add');