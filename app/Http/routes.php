<?php
return [
    '/' => [
        'method' => 'GET',
        'processor' => 'App\\Http\\Controllers\\MainController',
        'action' => 'index',
    ],
    'ala/bala' => [
        'method' => 'GET',
        'processor' => 'App\\Http\\Controllers\\MainController',
        'action' => 'simple',
    ],
    'with/some/{param1}/{param2}/{param3}/{param4?}' => [
        'method' => 'GET',
        'processor' => 'App\\Http\\Controllers\\MainController',
        'action' => 'other',
    ],
    'call/back' => [
        'method' => 'GET',
        'processor' => function() {
            return 'Ok, this is call back route.. Done!';
        },
    ],
    'cowboy' => [
        'method' => 'GET',
        'processor' => function() {
            return 'Ok, this is call back route.. Done!';
        },
    ],
];

