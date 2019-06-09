<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\MySQL\ProjetoChicout\ UsuarioDAO;
use App\Models\MySQL\ProjetoChicout\ UsuarioModel;

final class UsuarioController
{
    public function getUsuario(Request $request, Response $response, array $args): Response
    {
        $usuarioDAO = new UsuarioDAO();
        
        $usuario = $usuarioDAO->getAllUsuario();
        $response = $response->withJson($usuario);      

        return $response;
    }

    public function insertUsuario(Request $request, Response $response, array $args): Response
    {                     
        return $response;
    }

    public function updateUsuario(Request $request, Response $response, array $args): Response
    {                     
        return $response;
    }

    public function deleteUsuario(Request $request, Response $response, array $args): Response
    {                     
        return $response;
    }
    
}