<?php

require_once __DIR__ . '/../../application/routes/route.config.php';
require_once __DIR__ . '/../../vendor/routes.autoload.php';
require_once __DIR__ . '/../../../vendor/autoload.php';

use Dotenv\Dotenv;
use Src\Application\Routes\Router;
use Src\Application\Controllers\SignUpController;
use Src\Application\Controllers\CreateFastController;

$dotenv = Dotenv::createImmutable(__DIR__ . "/../../..");
$dotenv->load();

$router = new Router();

$router->post('/api/v1/auth/signup', SignUpController::class);
$router->post('/api/v1/fast/create', CreateFastController::class);

$router->run();