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
        
        print_r($usuario);

        return $response;
    }
    //=======================================================================
    public function insertUsuario(Request $request, Response $response, array $args): Response
    {                     
        $data = $request->getParsedBody();
        
        $usuarioDAO = new UsuarioDAO();
        $usuario = new UsuarioModel();

        $usuario->setTipoUsuario($data['tipo_usuario'])
                ->setNome($data['nome'])
                ->setLogin($data['login'])
                ->setSenha($data['senha'])
                ->setCpf($data['cpf'])
                ->setEmail($data['email'])
                ->setDataNascimento($data['data_nascimento'])
                ->setTelCelular($data['tel_celular'])
                ->setTelFixo($data['tel_fixo']);

        $usuarioDAO->insertUsuario($usuario);

        $response = $response->withJson([
            'message' => 'Usuário inseridos com sucesso!'
        ]);

        return $response;
    }
    //=======================================================================
    public function updateUsuario(Request $request, Response $response, array $args): Response
    {                     
        $data = $request->getParsedBody();
        
        $usuarioDAO = new UsuarioDAO();
        $usuario = new UsuarioModel();

        $usuario->setIdUsuario((int)$data['id_usuario'])
                ->setTipoUsuario($data['tipo_usuario'])
                ->setNome($data['nome'])
                ->setLogin($data['login'])
                ->setSenha($data['senha'])
                ->setCpf($data['cpf'])
                ->setEmail($data['email'])
                ->setDataNascimento($data['data_nascimento'])
                ->setTelCelular($data['tel_celular'])
                ->setTelFixo($data['tel_fixo']);

        $usuarioDAO->updateUsuario($usuario);

        $response = $response->withJson([
            'message' => 'Usuário editado com sucesso!'
        ]);

        return $response;
    }
    //=======================================================================
    public function deleteUsuario(Request $request, Response $response, array $args): Response
    {  
        $data = $request->getParsedBody();

        $usuarioDAO = new UsuarioDAO();
        
        $id_usuario = (int)$data['id_usuario'];
        
        $usuarioDAO->deleteUsuario($id_usuario);

        $response = $response->withJson([
            'message' => 'Usuário excluídos com sucesso!'
        ]);
                          
        return $response;
    }
    
}