<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\MySQL\ProjetoChicout\FormaPagamentoDAO;
use App\Models\MySQL\ProjetoChicout\FormaPagamentoModel;

final class FormaPagamentoController
{
    public function getFormaPagamento(Request $request, Response $response, array $args): Response
    {
        $formaPagamentoDAO = new FormaPagamentoDAO();
        
        $formaPagamento = $formaPagamentoDAO->getAllFormaPagamento();

        $response = $response->withJson($formaPagamento);      

        return $response;

    }
    //=======================================================================
    public function insertFormaPagamento(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        
        $formaPagamentoDAO = new FormaPagamentoDAO();
        $formaPagamento = new FormaPagamentoModel();   

        $formaPagamento->setDescricaoFp($data['descricao_fp'])
                       ->setTipoFp($data['tipo_fp']);	

        $formaPagamentoDAO->insertFormaPagamento($formaPagamento);

        $response = $response->withJson([
            'message' => 'Forma de pagamento inserida com sucesso!'
        ]);

        return $response;
    }
    //=======================================================================
    public function updateFormaPagamento(Request $request, Response $response, array $args): Response
    {
       
        $data = $request->getParsedBody();
        
        $formaPagamentoDAO = new FormaPagamentoDAO();
        $formaPagamento = new FormaPagamentoModel(); 

        $formaPagamento->setIdFormaPagamento((int)$data['id_formaPagamento'])
                       ->setDescricaoFp($data['descricao_fp'])
                       ->setTipoFp($data['tipo_fp']);

        $formaPagamentoDAO ->updateFormaPagamento($formaPagamento);

        $response = $response->withJson([
            'message' => 'Forma de pagamento alterada com sucesso!'
        ]);

        return $response;
    }
    //=======================================================================
    public function deleteFormaPagamento(Request $request, Response $response, array $args): Response
    {
         
        $data = $request->getParsedBody();

        $formaPagamentoDAO = new FormaPagamentoDAO();

        $id_formaPagamento = (int)$data['id_formaPagamento'];

        $formaPagamentoDAO->deleteFormaPagamento($id_formaPagamento);

        $response = $response->withJson([
            'message' => 'Forma de pagamento excluída com sucesso!'
        ]);

        return $response;

    }   
     
}