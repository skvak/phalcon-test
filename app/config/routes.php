<?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->add(
    "/step1",
    [
        "controller" => "index",
        "action"     => "step",
    ]
);

$router->add(
    "/step2",
    [
        "controller" => "index",
        "action"     => "step",
    ]
);

$router->add(
    "/step3",
    [
        "controller" => "index",
        "action"     => "step",
    ]
);

$router->add(
    "/register",
    [
        "controller" => "index",
        "action"     => "registration",
    ]
);

return $router;