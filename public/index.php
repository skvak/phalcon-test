<?php

try {

    //Register an autoloader
    $loader = new \Phalcon\Loader();
    $loader->registerDirs([
        '../app/controllers/',
        '../app/models/',
        '../app/validations/'
    ])->register();

    //Create a DI
    $di = new Phalcon\DI\FactoryDefault();

    //Setup the database service
    $di->set('db', function(){
        return new \Phalcon\Db\Adapter\Pdo\Mysql([
            "host" => "localhost",
            "username" => "root",
            "password" => "dreamteam",
            "dbname" => "phalcon_test"
        ]);
    });

    //Registering Volt as template engine
    $di->set('view', function() {
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('../app/views/');
        $view->registerEngines([
            ".volt" => 'Phalcon\Mvc\View\Engine\Volt'
        ]);
        return $view;
    });

    /**
     * Add routing capabilities
     */
    $di->set("router", function () {
            $router = require __DIR__ . "/../app/config/routes.php";

            return $router;
    });

    //Setup a base URI so that all generated URIs include the "tutorial" folder
    $di->set('url', function(){
        $url = new \Phalcon\Mvc\Url();
        $url->setBaseUri('/');
        return $url;
    });

    // Start session
    $di->set('session', function (){
        $session = new \Phalcon\Session\Adapter\Files();
        $session->start();
        return $session;
    });

    //Handle the request
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch(\Phalcon\Exception $e) {
    echo "PhalconException: ", $e->getMessage();
}