<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('bye', new Routing\Route('/bye',array(
    '_controller' => 'render_template'
)));
$routes->add('index', new Routing\Route('/', array(
    '_controller' => 'render_template'
)));

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => 'Sem\Calendar\Controller\LeapYearController::indexAction',
)));






return $routes;