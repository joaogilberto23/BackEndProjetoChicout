<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class FormaPagamentoController
{
    public function getFormaPagamento(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                      
        return $response;
    }

    public function insertFormaPagamento(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                     
        return $response;
    }

    public function updateFormaPagamento(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                     
        return $response;
    }

    public function deleteFormaPagamento(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                     
        return $response;
    }
    
}