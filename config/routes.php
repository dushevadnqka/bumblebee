<?php

/*
 |-----------------------------------------------|
 |Setting application domain and base controller |
 |-----------------------------------------------|
 */
return [
    'application_domain' => getenv('APP_DOMAIN'),
    'base_controller' => 'App\\Http\\Controllers\\MainController'
];
