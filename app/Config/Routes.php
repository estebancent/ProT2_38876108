<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/principal',  'Home::ver');
$routes->get('/quieneSomos', 'Home::quieneSomos');
$routes->get('/acercaDe', 'Home::acerca_de');
$routes->get('/login','Home::login');
$routes->get('/registrarse','Home::registrarse');


