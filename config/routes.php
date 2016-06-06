<?php

use Cake\Routing\Router;

Router::plugin(
    'Sb2plugin',
    ['path' => '/sb2plugin'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);