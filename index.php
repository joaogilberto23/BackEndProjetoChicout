<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require_once "vendor\autoload.php";

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$configuration = new \Slim\Container($configuration);

$app = new \Slim\App();

$app->get('/categorias', function(Request $request, Response $response, array $args) {
    return $response->getBody()->write('Categorias do banco de dados!');
});

$app->run();