<?php

/*error_reporting(E_ALL);ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

require 'vendor/autoload.php';

require 'bootstrap.php';

$router = new Router();

require 'router/routes.php';

$uri = Request::uri();

$router = Router::loadRoutes('routes.php');

require $router->direct($uri, Request::method());