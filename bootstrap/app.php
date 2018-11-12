<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

//retrive container
$container = $app->getContainer();


$container ['view'] = function ($container){

    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views',[
        'cache' => false,
    ]);

    //instantiate and add Slim specific extension
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension( new \Slim\Views\TwigExtension($router,$uri));
    return $view;
};
require __DIR__ . '/../routes/web.php';