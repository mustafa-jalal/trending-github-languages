<?php

use Dependencies\ProcessorsProvider;
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->get('v1/trending-languages', static function () {
    return ProcessorsProvider::getTrendingLanguagesProcessor()->execute();
});