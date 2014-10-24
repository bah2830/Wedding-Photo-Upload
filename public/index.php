<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__ . '/../views'));

$app->get('/', '\Controller\IndexController::indexAction');
$app->post('/upload', '\Controller\FileController::uploadAction');

$app->run();
