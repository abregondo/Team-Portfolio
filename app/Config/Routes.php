<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::home');
$routes->get('about', 'Pages::about');
$routes->get('projects', 'Pages::projects');
$routes->get('project/(:segment)', 'Pages::project/$1');
$routes->get('contact', 'Pages::contact');
$routes->get('members', 'Members::index');
$routes->get('members/(:segment)/resume', 'Members::resume/$1');
$routes->get('members/(:segment)', 'Members::detail/$1');
