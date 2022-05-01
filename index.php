<?php

use App\modules\home\controller\HomeController;

require 'vendor/autoload.php';

$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true,
]];

$app = new \Slim\App($config);

$app->get("/", HomeController::class. ":getProduct");
$app->post("/", HomeController::class. ":postProduct");
$app->post("/categoryinsert", HomeController::class. ":categoryInsert");

$app->run();