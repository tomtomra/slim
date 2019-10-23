<?php

$app = new \Slim\App;
$app->get('/hello/{name}', SampleController::class . ':index');
$app->get('/test/{name}', TestController::class . ':index');
$app->run();
