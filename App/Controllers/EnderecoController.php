<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class EnderecoController
{
    public function getEndereco(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                        
        return $response;
    }

    public function insertEndereco(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                      
        return $response;
    }

    public function updateEndereco(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                     
        return $response;
    }

    public function deleteEndereco(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello Word!'
        ]);
                   
        return $response;
    }
    
}