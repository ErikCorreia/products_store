<?php

use App\modules\home\controller\HomeController;
use App\modules\edit\controller\EditController;

require 'vendor/autoload.php';

$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true,
]];

$app = new \Slim\App($config);

$app->get("/", HomeController::class. ":getProducts");
$app->get("/{productId}", HomeController::class. ":getProducts");
$app->post("/", HomeController::class. ":postProducts");
$app->post("/categoryinsert", HomeController::class. ":categoryInsert");

$app->get("/editar/{id}", EditController::class. ":getProduct");

$app->run();