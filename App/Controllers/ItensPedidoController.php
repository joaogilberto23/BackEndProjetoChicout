<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ItensPedidoController
{
    public function getItensPedido(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                     
        return $response;
    }

    public function insertItensPedido(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                     
        return $response;
    }

    public function updateItensPedido(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                    
        return $response;
    }

    public function deleteItensPedido(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                    
        return $response;
    }
}