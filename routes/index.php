<?php

use function src\slimConfiguration;
use App\Controllers\ProdutoController;

$app = new \Slim\App(slimConfiguration());

// ===============================================================

$app->get('/', ProdutoController::class . ':getProdutos');

// ===============================================================

$app->run();