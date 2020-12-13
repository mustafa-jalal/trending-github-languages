<?php

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpMethodNotAllowedException;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../application/Routes/api.php';

// load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__. '/../../');
$dotenv->load();


// dispatch routes
$dispatcher = new Dispatcher($router->getData());

try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], implode('/', array_slice(explode('/', $_SERVER['REQUEST_URI']), 3)));
} catch (HttpRouteNotFoundException $e) {

    echo $e->getMessage();

    die();
} catch (HttpMethodNotAllowedException $e) {

    echo $e->getMessage();

    die();
}
echo $response;

