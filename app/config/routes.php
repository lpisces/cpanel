<?php

$router = new Phalcon\Mvc\Router(false);

$router->add(
    '/sign_in',
    array(
       'controller' => 'session',
       'action'     => 'new'
    )
);

$router->setUriSource(Phalcon\Mvc\Router::URI_SOURCE_SERVER_REQUEST_URI); 
return $router;
