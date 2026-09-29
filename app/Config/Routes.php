<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('mostrar', 'Home::mostrar');

$routes->get('/', 'Home::index');
$routes->get('ingresar', 'Home::ingresar');


$routes->resource('clientes');
$routes->resource('equipos');
$routes->resource('servicios');

