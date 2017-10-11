<?php
require '../vendor/autoload.php';

use \App\Controllers\UserController;

use \App\Middlewares\FlashMiddleware;

session_start();

$app = new \Slim\App([
  'settings' => [
    'displayErrorDetails' => true
  ]
]);


require('../app/settings.php');
require('../app/container.php');

$container = $app->getContainer();

$app->add(new FlashMiddleware($container->view->getEnvironment()));

$app->get('/user', UserController::class.':list')->setName('userList');
$app->get('/user/create', UserController::class.':create')->setName('userCreate');
$app->post('/user/create', UserController::class.':create')->setName('userCreate');
$app->get('/user/update/{id}', UserController::class.':update')->setName('userUpdate');
$app->post('/user/update/{id}', UserController::class.':update')->setName('userUpdate');
$app->get('/user/delete/{id}', UserController::class.':delete')->setName('userDelete');


$app->run();
