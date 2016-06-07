<?php

use Cake\Routing\Router;

Router::plugin(
    'Sb2plugin',
    ['path' => '/Sb2plugin'],
    function ($routes) {
        $routes->connect('/Examples/*', ['controller' => 'Examples', 'action' => 'index']);
        $routes->connect('/examples/*', ['controller' => 'Examples', 'action' => 'index']);
        $routes->fallbacks('DashedRoute');
    }
);