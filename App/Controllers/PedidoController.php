<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class PedidoController
{
    public function getPedido(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                       
        return $response;
    }

    public function insertPedido(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                     
        return $response;
    }

    public function updatePedido(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                     
        return $response;
    }

    public function deletePedido(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                     
        return $response;
    }
}