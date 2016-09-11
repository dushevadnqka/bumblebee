<?php
require_once __DIR__.'/../vendor/autoload.php';

/*
  |--------------------------------------------------------------------------
  | Create The Application
  |--------------------------------------------------------------------------
  |
  | Here we will load the environment and create the application instance
  | that serves as the central piece of this framework. We'll use this
  | application as an "IoC" container and router for this framework.
  |
 */

try {
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    throw new Exception($e->getMessage());
}

$app = \Core\App::getInstance();

return $app;
