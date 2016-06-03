<?php

use Cake\Routing\Router;

Router::plugin('SB2', function ($routes) {
    $routes->connect('/', ['controller' => 'Examples', 'action' => 'display', 'home']);
    $routes->connect('/examples/*', ['controller' => 'Examples', 'action' => 'display']);
});
