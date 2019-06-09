<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\MySQL\ProjetoChicout\EnderecoDAO;
use App\Models\MySQL\ProjetoChicout\EnderecoModel;

final class EnderecoController
{
    public function getEndereco(Request $request, Response $response, array $args): Response
    {
        $enderecoDAO = new EnderecoDAO(); 

        $endereco = $enderecoDAO->getAllEndereco();

        $response = $response->withJson($endereco);
        
        print_r($endereco);

        return $response;
    }
    //=======================================================================
    public function insertEndereco(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        
        $enderecoDAO = new EnderecoDAO();
        $endereco = new EnderecoModel();   

        $endereco->setIdUsuario((int)$data['id_usuario'])
                 ->setLogradouro($data['logradouro'])
                 ->setNumero((int)$data['numero'])
                 ->setCidade($data['cidade'])
                 ->setBairro($data['bairro'])
                 ->setEstado($data['estado'])
                 ->setCep($data['cep'])
                 ->setComplemento($data['complemento'])
                 ->setReferencia($data['referencia']);

        $enderecoDAO->insertEndereco($endereco);

        $response = $response->withJson([
            'message' => 'Endereço inserido com sucesso!'
        ]);

        return $response;      
    }
    //=======================================================================
    public function updateEndereco(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        
        $enderecoDAO = new EnderecoDAO();
        $endereco = new EnderecoModel(); 

        $endereco->setIdUsuario((int)$data['id_usuario'])
                 ->setLogradouro($data['logradouro'])
                 ->setNumero((int)$data['numero'])
                 ->setCidade($data['cidade'])
                 ->setBairro($data['bairro'])
                 ->setEstado($data['estado'])
                 ->setCep($data['cep'])
                 ->setComplemento($data['complemento'])
                 ->setReferencia($data['referencia']);

        $enderecoDAO->updateEndereco($endereco);

        $response = $response->withJson([
            'message' => 'Endereço editado com sucesso!'
        ]);
         
        return $response;   
    }
    //=======================================================================
    public function deleteEndereco(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $enderecoDAO = new EnderecoDAO();

        $id_endereco = (int)$data['id_endereco'];
        
        $enderecoDAO->deleteEndereco($id_endereco);

        $response = $response->withJson([
            'message' => 'Endereço excluído com sucesso!'
        ]);        
        return $response;
    }
    
}